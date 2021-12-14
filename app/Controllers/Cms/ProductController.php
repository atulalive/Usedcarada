<?php

namespace App\Controllers\Cms;

use App\Controllers\BaseController;
use App\Models\Cms\Product;

class ProductController extends BaseController
{   
    private $product;
	private $session;
    /**
	 * constructor
	 */
	public function __construct()
	{
		helper(['form', 'url', 'session']);
        $this->session = \Config\Services::session();
        
		$this->product = new Product();
		$this->session = session();
	}

    /**
	 * Product List
	 */
    public function productlist()
	{
		return view('cms/product_list');
	}

    /**
	 * Product New
	 */
    public function productnew()
	{
		return view('cms/product_new');
	}
}
