<?php

namespace App\Controllers\Cms;

use App\Controllers\BaseController;

use App\Models\Cms\Vendor1;

class Vendor1Controller extends BaseController
{

    /**
	 * constructor
	 */
	public function __construct()
	{
		
	}

    public function vendorlist()
	{
		$data['sorting_column'] = 'id';
		$data['sort'] = 'DESC';
		$data['vendorList']  = $this->vendors->vendor_list($data);
		return view('cms/vendor_list',$data);
		
 	 }



	public function vendorform()
	{
		
		return view('cms/vendor1_add');
	}

    public function vendor1add() 
	{
		
				
		$vendorsimg = $this->request->getFile('image');
		$vendorimg = $vendorsimg->getRandomName();
		$vendorsimg->move(DIR_MEDIA . 'vendors',$vendorimg);

		$this->vendors->save([
			'vendor_id' => $this->request->getPost('vendor_id'),
			'user_id' => session()->get('id'),
			'first_name' => $this->request->getPost('first_name'),
			'last_name' => $this->request->getPost('last_name'),
			// 'car_name'  => $this->request->getPost('car_name'),
			'thumbnail'  => $vendorimg,
			'created_datetime' => date('Y-m-d H:i:s'),
			'deleted' => 0
		]);

		session()->setFlashdata('success', 'Success! vendor Added Successfully.');
		return redirect()->to(site_url('cms/vendorlist'));	

				// $this->validate([
				// 	'first_name' => 'required',
				// 	'last_name' => 'required',
				// 	'vendor_id' => 'required',
				// 	// 'car_name' => 'required',
				// 	'image' => [
				// 		'uploaded[image]',
				// 		'mime_in[image,image/jpg,image/jpeg,image/png]',
				// 		'max_size[image,4096]',
				// 	],
				// 	])
 	 }

	


}
