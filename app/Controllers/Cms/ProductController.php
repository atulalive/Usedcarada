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
		helper(['form', 'url', 'session','number']);
        $this->session = \Config\Services::session();
        
		$this->product = new Product();
		$this->session = session();
	}

    /**
	 * Product List
	 */
    public function productlist()
	{
		$data['sorting_column'] = 'pro_id';
		$data['sort'] = 'DESC';
		 ## Fetch all records
		$data['products']  = $this->product->product_list($data);
		return view('cms/product_list',$data);
	}

    /**
	 * Product New
	 */
    public function productnew()
	{
		return view('cms/product_new');
	}
}
