<?php

namespace App\Controllers\Cms;

use App\Controllers\BaseController;

use App\Models\Cms\Models;

class ModelsController extends BaseController
{

    private $models;
	private $session;
    /**
	 * constructor
	 */
	public function __construct()
	{
		helper(['form', 'url', 'session']);
        $this->session = \Config\Services::session();
        
		$this->models = new Models();
		$this->session = session();
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
			'model_name' => 'required',
			'model_alias_name' => 'required',
			'model_image' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/png]',
                'max_size[file,1024]'
            ]])){

					$brnadimg = $this->request->getFile('model_image');
					$imgbrand = $brnadimg->getRandomName();
					$brnadimg->move(URL_IMAGES_MEDIA . 'models',$imgbrand);

					$this->user->save([
						'brand_id' => $this->request->getVar('brand_id'),
						'user_id' => $this->session['id'] ,
						'year' => $this->request->getVar('model_year'),
						'name' => $this->request->getVar('model_name'),
						'machine_name'  => $this->request->getVar('model_alias_name'),
						'thumbnail'  => $imgbrand,
						'created_datetime' => NOW(),
						'deleted' => 0
					]);

					session()->setFlashdata('success', 'Success! Model Added Successfully.');
					return view('cms/brand_list');	
				}else{
					return view('cms/add_model', ['validation' => $this->validator]);
				}
 	 }
}
