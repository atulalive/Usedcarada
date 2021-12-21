<?php

namespace App\Controllers\Cms;
use App\Models\Cms\Cities;
use App\Controllers\BaseController;

class CitiesController extends BaseController
{
    private $citie;
	private $session;
    public function index()
    {
        helper(['form', 'url', 'session']);
        $this->session = \Config\Services::session();
        
		$this->citie = new Cities();
		$this->session = session();
    }

    public function citieslist()
	 {
		//$data['sorting_column'] = 'id';
		//$data['sort'] = 'DESC';
        //$data['citie']  = $this->citie->cities_list($data);
		return view('cms/cities_list');
		
 	 }

    public function citiesform()
	{
		return view('cms/cities_add');
	}
}
