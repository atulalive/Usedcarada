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

    public function brand()
	 {
		return view('cms/brand');
 	 }

      public function addbrand()
	 {
		return view('cms/brands_add');
 	 }
}
