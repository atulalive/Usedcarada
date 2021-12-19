<?php

namespace App\Controllers\Cms;

use App\Controllers\BaseController;

use App\Models\Cms\Brand;

class BrandController extends BaseController
{

    private $brand;
	private $session;
    /**
	 * constructor
	 */
	public function __construct()
	{
		helper(['form', 'url', 'session']);
        $this->session = \Config\Services::session();
        
		$this->brand = new Brand();
		$this->session = session();
	}

    public function brandlist()
	 {
		$data['sorting_column'] = 'id';
		$data['sort'] = 'DESC';
		$data['brandList']  = $this->brand->brand_list($data);
		return view('cms/brand_list',$data);
		
 	 }


	  public function brandform()
	{
		return view('cms/brand_add');
	}

      public function brandadd()
	 {
		
		if ($this->validate([
			'brand_name' => 'required',
			'brand_alias_name' => 'required',
			'brand_year' => 'required',
			'brand_image' => [
				'uploaded[brand_image]',
				'mime_in[brand_image,image/jpg,image/jpeg,image/png]',
				'max_size[brand_image,4096]',
			],
			])){
					
					$brnadimg = $this->request->getFile('brand_image');
					$imgbrand = $brnadimg->getRandomName();
					$brnadimg->move(DIR_MEDIA . 'brands',$imgbrand);
					
					$this->brand->save([
						'brand_name' => $this->request->getPost('brand_name'),
						'year' => $this->request->getPost('brand_year'),
						'added_by' => session()->get('id'),
						'action_by' => session()->get('user_type_name'),
						'machine_name'  => $this->request->getPost('brand_alias_name'),
						'brand_thumbnail_image'  => $imgbrand,
						'created_datetime' => date('Y-m-d H:i:s'),
						'deleted' => 0
					]);

					session()->setFlashdata('success', 'Success! Brand Added Successfully.');
					return redirect()->to(site_url('cms/brandlist'));	
				}else{
					return view('cms/brand_add', ['validation' => $this->validator]);
				}

 	 }



	


}
