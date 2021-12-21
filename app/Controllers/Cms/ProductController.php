<?php

namespace App\Controllers\Cms;

use App\Controllers\BaseController;
use App\Models\Products;
use App\Models\Cms\Product;
use App\Models\Cms\ProductsImage;

class ProductController extends BaseController
{   
    private $products;
    private $product;
    private $productsImage;
	private $session;
    /**
	 * constructor
	 */
	public function __construct()
	{
		helper(['form', 'url', 'session','number']);
        $this->session = \Config\Services::session();
        
		$this->product = new Product();
		$this->products = new Products();
		$this->session = session();

		setlocale(LC_MONETARY, 'en_IN.UTF-8');
	}

    /**
	 * Product List
	 */
    public function productlist()
	{
		$data['sorting_column'] = 'pro_id';
		$data['sort'] = 'DESC';
		 ## Fetch all records
		$data['products']  = $this->product->product_list($data);
		return view('cms/product_list',$data);
	}

    /**
	 * Product New
	 */
    public function productnew()
	{
		
		$data['sub_category'] = $this->products->get_product_sub_category(['category' => 'cars']);
		$data['brand'] = $this->products->get_product_brands(['is_brand' => true]);
		$data['top_cities']  = $this->products->get_top_cities();
		return view('cms/product_new',$data);
	}

	/**
	 * Product New store
	 */
    public function productstore()
	{
		$product = $this->request->getPost('product'); 
		$product_basic_info = $product['basic_info'];
		$product_product_price = $product['product_price'];
		$product_top_cities = $product['top_cities'];
		$product_overview = $product['overview'];
		$product_specifiation = $product['specifiation'];
		
		$db = \Config\Database::connect();
        
		$inputs = $this->validate([
			'carname' => 'required|min_length[5]',
			'product_alias_name' => 'required|min_length[5]',
			'carprice' => 'required|min_length[2]',
			'carsellprice' => 'required|min_length[2]',
			'brand' => 'required',
			'model' => 'required',
			'cartype' => 'required',
			'city' => 'required',

			'product_thumbnail' => [
				'uploaded[product_thumbnail]',
				'mime_in[product_thumbnail,image/jpg,image/jpeg,image/png]',
				'max_size[product_thumbnail,4096]',
			],

			'make_year' => 'required|min_length[4]',
			'registration_year' => 'required|min_length[4]',
			'fuel' => 'required|min_length[4]',
			'kms_driven' => 'required|min_length[2]',
			'engine_displacement' => 'required|min_length[2]',
			'no_of_owner' => 'required|min_length[2]',
			'rto' => 'required|min_length[2]',
			'transmission' => 'required',
			'insurance_type' => 'required|min_length[2]',
			
			'mileage' => 'required|min_length[2]',
			'engine' => 'required|min_length[2]',
			'max_power' => 'required|min_length[2]',
			'torque' => 'required|min_length[2]',
			'wheel_size' => 'required|min_length[2]',
			'seats' => 'required|min_length[2]',
			'color' => 'required|min_length[2]'
		]);
		
		if (!$inputs) {
			$data['brand'] = $this->products->get_product_brands(['is_brand' => true]);
			$data['sub_category'] = $this->products->get_product_sub_category(['category' => 'cars']);
			$data['top_cities']  = $this->products->get_top_cities();
			return view('cms/product_new', [
				'validation' => $this->validator,
				'brand' => $data['brand'],
				'sub_category' => $data['sub_category'],
				'top_cities' => $data['top_cities'],
			]);
		}

		/*echo '<pre><br/> Test';
		print_r($this->request->getPost('brand'));
		print_r($this->request->getFile('product_thumbnail'));
		print_r($this->request->getFileMultiple('product_multiple_image'));
		// print_r($this->validator);
		echo '</pre>'; //die;*/
		
		/**** Product Thumbnail Image Upload ****/
		if ($this->request->getPost('product_alias_name')) {
			$thumb_file = $this->request->getFile('product_thumbnail');
			$image = \Config\Services::image()
				->withFile($thumb_file)
				->resize(100, 100, true, 'height')
				->save(DIR_MEDIA .'/cars/'. $thumb_file->getRandomName());

			$thumb_file->move(DIR_MEDIA . 'cars');

			$thumb_file_name =  $thumb_file->getName();

		}else{
			session()->setFlashdata('failed', 'Please check all field.');
			return redirect()->to(site_url('/'.session()->get('user_type_name').'/caradd'));
		}
		/**** //Product Thumbnail Image Upload ****/

		
		
		/**** Product Insert ****/
		if ($this->request->getPost('carname')) {
			$this->product->save([
				'created_datetime' => date('Y-m-d H:i:s'),
				'product_name' => $this->request->getPost('carname'),
				'product_alias_name'  => $this->request->getPost('product_alias_name'),
				'product_category'  => 'cars',
				'product_thumbnail'  => $thumb_file_name,
				'added_by'  => session()->get('id'),
				'action_by'  => session()->get('user_type_name')
			]);
			$product_id = $this->product->insertID();
			
		}else{
			session()->setFlashdata('failed', 'Please check all field.');
			return redirect()->to(site_url('/'.session()->get('user_type_name').'/caradd'));
		}
		/**** //Product Insert **/

		/**** Product Multiple Image Upload ****/
		if ($this->request->getFileMultiple('product_multiple_image')) {
			$image_insert = $db->table('products_image');
			foreach($this->request->getFileMultiple('product_multiple_image') as $file)
            {   
				$image = \Config\Services::image()
					->withFile($file)
					->resize(100, 100, true, 'height')
					->save(DIR_MEDIA .'/cars/'. $file->getRandomName());

				$file->move(DIR_MEDIA . 'cars');
	
				$data = [
					'pro_id' =>  $product_id,
					'created_datetime' =>  date('Y-m-d H:i:s'),
					'product_image' =>  $file->getName(),
				];

              $save = $image_insert->insert($data);
            }
		}else{
			session()->setFlashdata('failed', 'Please check all field.');
			return redirect()->to(site_url('/'.session()->get('user_type_name').'/caradd'));
		}
		/**** //Product Multiple Image Upload ****/

		/**** Product Price ****/
		if(!empty($product_id) && $product_id != ""){
			$product_price_data = [
				'created_datetime' => date('Y-m-d H:i:s'),
				'product_base_price' => str_replace(',','',$this->request->getPost('carprice')),
				'product_sell_price' => str_replace(',','',$this->request->getPost('carsellprice')),
				'pro_id' => $product_id
			];

			$product_price_insert = $db->table('products_price');
            $product_price_insert_save = $product_price_insert->insert($product_price_data);
		}else{
			session()->setFlashdata('failed', 'Please check all field.');
			return redirect()->to(site_url('/'.session()->get('user_type_name').'/caradd'));
		}
		/**** /Product Price ***/

		/****  Product city ***/
		if(!empty($product_id) && $product_id != ""){
			$product_city_data = [
				'created_datetime' => date('Y-m-d H:i:s'),
				'city_id' => $this->request->getPost('city'),
				'products_id' => $product_id
			];

			$product_city_insert = $db->table('product_cities_mapping');
            $product_city_insert_save = $product_city_insert->insert($product_city_data);
		}else{
			session()->setFlashdata('failed', 'Please check all field.');
			return redirect()->to(site_url('/'.session()->get('user_type_name').'/caradd'));
		}
		/**** /Product city ***/
		
		/**** Product Brand Model Mapping ****/
		if(!empty($product_id) && $product_id != ""){
			$product_brand_model_data = [
				'created_datetime' => date('Y-m-d H:i:s'),
				'brand_id' => $this->request->getPost('brand'),
				'model_id' => $this->request->getPost('model'),
				'products_id' => $product_id
			];

			$product_brand_model_insert = $db->table('product_brand_model_mapping');
            $product_brand_model_insert_save = $product_brand_model_insert->insert($product_brand_model_data);
		}else{
			session()->setFlashdata('failed', 'Please check all field.');
			return redirect()->to(site_url('/'.session()->get('user_type_name').'/caradd'));
		}
		/**** //Product Brand Model Mapping **/

		/**** Product Category Mapping ****/
		if(!empty($product_id) && $product_id != ""){
			$product_category_data = [
				'created_datetime' => date('Y-m-d H:i:s'),
				'cat_id' => 1,//for Car Category default
				'sub_cat_id' => $this->request->getPost('cartype'),
				'pro_id' => $product_id
			];

			$product_category_insert = $db->table('products_category_mapping');
            $product_category_insert_save = $product_category_insert->insert($product_category_data);
		}else{
			session()->setFlashdata('failed', 'Please check all field.');
			return redirect()->to(site_url('/'.session()->get('user_type_name').'/caradd'));
		}
		/**** //Product Category Mapping **/
		
		/**** Product Overview ****/
		if(!empty($product_id) && $product_id != ""){
			$product_overview_data = [
				'created_datetime' => date('Y-m-d H:i:s'),
				'pro_id' => $product_id,
				'make_year' => $this->request->getPost('make_year'),
				'registraion_year' => $this->request->getPost('registration_year'),
				'fuel' => $this->request->getPost('fuel'),
				'kms_driven' => $this->request->getPost('kms_driven'),
				'engine_displacenent' => $this->request->getPost('engine_displacement'),
				'no_of_owner' => $this->request->getPost('no_of_owner'),
				'rto' => $this->request->getPost('rto'),
				'transmission' => $this->request->getPost('transmission'),
				'insurance_type' => $this->request->getPost('insurance_type')
			];

			$product_overview_insert = $db->table('product_overview');
            $product_overview_insert_save = $product_overview_insert->insert($product_overview_data);
		}else{
			session()->setFlashdata('failed', 'Please check all field.');
			return redirect()->to(site_url('/'.session()->get('user_type_name').'/caradd'));
		}
		/**** //Product Overview **/

		/**** Product Specification ****/
		if(!empty($product_id) && $product_id != ""){
			$product_speciication_data = [
				'created_datetime' => date('Y-m-d H:i:s'),
				'pro_id' => $product_id,
				'mileage' => $this->request->getPost('mileage'),
				'engine' => $this->request->getPost('engine'),
				'max_power' => $this->request->getPost('max_power'),
				'torque' => $this->request->getPost('torque'),
				'wheel_size' => $this->request->getPost('wheel_size'),
				'seats' => $this->request->getPost('seats'),
				'color' => $this->request->getPost('color')
			];

			$product_speciication_insert = $db->table('product_specifications');
            $product_speciication_insert_save = $product_speciication_insert->insert($product_speciication_data);
		}else{
			session()->setFlashdata('failed', 'Please check all field.');
			return redirect()->to(site_url('/'.session()->get('user_type_name').'/caradd'));
		}
		/**** //Product Specification **/
		session()->setFlashdata('success', 'Your Product has been added in portal Successfully.');
		return redirect()->to(site_url('/'.session()->get('user_type_name').'/carlist'));
	}
}
