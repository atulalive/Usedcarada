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

    public function customer()
	 {
        return view('cms/customer_list');
 	 }


	  public function customerform()
	{
		return view('cms/customer_add');
	}

      public function customeradd()
	 {
		return view('cms/customer_add');
		
 	 }



	


}
