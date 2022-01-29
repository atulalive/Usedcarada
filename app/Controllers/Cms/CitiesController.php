<?php

namespace App\Controllers\Cms;
use App\Models\Cms\Cities;
use App\Controllers\BaseController;
use App\Models\Cms\Country;

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
		$name['sorting_column'] = 'id';
		$name['sort'] = 'DESC';
		$name['citiesList']  = $this->cities->cities_list($name);
		return view('cms/cities_list');
		
 	 }

    public function citiesform()
	{
		return view('cms/cities_add');
	}
	public function countryform()
	{
		return view('cms/add_country');
	}
	public function addcountry()
	{
		if ($this->validate([
			'name' => 'required'
		])){
				$name = $this->request->getPost('name');
				
				$country = new Country();
				$insert = $country->addCountry($name);
				
				if ($insert) {
					session()->setFlashdata('success', 'Success! country Added Successfully.');
					return redirect()->to(site_url('cms/citieslist'));	
				} else {
					session()->setFlashdata('success', 'Data Not Inserted!');
					return redirect()->to(site_url('cms/citieslist'));	
				}
					
				}else{
					return view('cms/add_country', ['validation' => $this->validator]);
				}
		
	}
	public function stateform()
	{
		return view('cms/add_state');
	}
	public function addstate()
	{
		if ($this->validate([
			'name' => 'required'
		])){
				$name = $this->request->getPost('name');
				
				$state = new Country();
				$insert = $state->addstate($name);
				
				if ($insert) {
					session()->setFlashdata('success', 'Success! state Added Successfully.');
					return redirect()->to(site_url('cms/citieslist'));	
				} else {
					session()->setFlashdata('success', 'Data Not Inserted!');
					return redirect()->to(site_url('cms/citieslist'));	
				}
					
				}else{
					return view('cms/add_country', ['validation' => $this->validator]);
				}
		
	}
}
