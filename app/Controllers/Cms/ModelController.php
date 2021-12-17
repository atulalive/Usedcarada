<?php

namespace App\Controllers\Cms;

use App\Controllers\BaseController;

use App\Models\Cms\Model;

class BrandController extends BaseController
{

    private $model;
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

    public function model()
	 {
		return view('cms/model');
 	 }

      public function addmodel()
	 {
		return view('cms/add_model');
 	 }
}
