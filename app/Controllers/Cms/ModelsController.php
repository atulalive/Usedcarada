<?php

namespace App\Controllers\Cms;

use App\Controllers\BaseController;
use App\Models\Products;
use App\Models\Cms\Models;

class ModelsController extends BaseController
{

    private $models;
	private $session;
	private $products;
    /**
	 * constructor
	 */
	public function __construct()
	{
		helper(['form', 'url', 'session']);
        $this->session = \Config\Services::session();
        
		$this->models = new Models();
		$this->products = new Products();
		$this->session = session();
	}

	public function modelform()
	{
		$data['brand'] = $this->products->get_product_brands(['is_brand' => true]);
		return view('cms/add_model',$data);
	}
	

    public function modelslist()
	 {
		$data['sorting_column'] = 'id';
		$data['sort'] = 'DESC';
		$data['modelList']  = $this->models->model_list($data);
		return view('cms/model_list',$data);
 	 }
	  
      public function addmodels()
	 {
		if ($this->validate([
			'models' => 'required',
			'year' => 'required',
			'brand_id' => 'required',
			'model_alias_name' => 'required',
			'image' => [
				'uploaded[image]',
				'mime_in[image,image/jpg,image/jpeg,image/png]',
				'max_size[image,4096]',
			],
			])){
					
					$modelsimg = $this->request->getFile('image');
					$modelimg = $modelsimg->getRandomName();
					$modelsimg->move(DIR_MEDIA . 'models',$modelimg);

					$this->models->save([
						'brand_id' => $this->request->getPost('brand_id'),
						'user_id' => session()->get('id'),
						'year' => $this->request->getPost('year'),
						'name' => $this->request->getPost('models'),
						'machine_name'  => $this->request->getPost('model_alias_name'),
						'thumbnail'  => $modelimg,
						'created_datetime' => date('Y-m-d H:i:s'),
						'deleted' => 0
					]);

					session()->setFlashdata('success', 'Success! Model Added Successfully.');
					return redirect()->to(site_url('cms/modelslist'));	
				}else{
					$data['brand'] = $this->products->get_product_brands(['is_brand' => true]);
					return view('cms/add_model',['validation' => $this->validator,'brand'=>$data['brand']]);
				}
 	 }
}
