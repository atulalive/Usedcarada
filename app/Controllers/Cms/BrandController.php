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

      public function brandadd()
	 {
		return view('cms/brand_add');
 	 }
}
