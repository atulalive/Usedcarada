<?php

namespace App\Controllers\Cms;

use App\Controllers\BaseController;

use App\Models\Cms\Vendor1;

class BrandController extends BaseController
{

    /**
	 * constructor
	 */
	public function __construct()
	{
		
	}

    public function vendorlist()
	 {
        return view('cms/vendor_list');
 	 }


	  public function vendorform()
	{
		return view('cms/vendor1_add');
	}

      public function vendoradd()
	 {
		return view('cms/vendor1_add');
		
 	 }



	


}
