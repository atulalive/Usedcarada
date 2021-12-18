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
		return view('cms/add_model');
 	 }
}
