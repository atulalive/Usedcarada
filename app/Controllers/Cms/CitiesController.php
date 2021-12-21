<?php

namespace App\Controllers\Cms;
use App\Models\Cms\cities;
use App\Controllers\BaseController;

class CitiesController extends BaseController
{
    public function index()
    {
        helper(['form', 'url', 'session']);
        $this->session = \Config\Services::session();
        
		$this->cities = new cities();
		$this->session = session();
    }

    public function citieslist()
	 {
		$data['sorting_column'] = 'id';
		$data['sort'] = 'DESC';
		$data['citiesList']  = $this->cities->cities_list($data);
		return view('cms/cities_list',$data);
		
 	 }

    public function citiesform()
	{
		return view('cms/cities_add');
	}
}
