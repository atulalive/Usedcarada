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
		// $data['sorting_column'] = 'id';
		// $data['sort'] = 'DESC';
        // $data['citie']  = $this->citie->cities_list($data);
		return view('cms/cities_list');
		
 	 }

    public function citiesform()
	{if ($this->validate([
		'city' => 'required',
		'city_country' => 'required',
		'city_state' => 'required',
		'city_name' => 'required',
		'car_name' => 'required',
		'image' => [
			'uploaded[image]',
			'mime_in[image,image/jpg,image/jpeg,image/png]',
			'max_size[image,4096]',
		],
		])){
				
				$cityimg = $this->request->getFile('image');
				$imgcity = $cityimg->getRandomName();
				$cityimg->move(DIR_MEDIA . 'brands',$imgcity);
				
				$this->city->save([
					'city_country' => $this->request->getPost('city'),
					'city_state' => $this->request->getPost('year'),
					'added_by' => session()->get('id'),
					'action_by' => session()->get('user_type_name'),
					'city_country'  => $this->request->getPost('city_country'),
					'city_image_thumbnail'  => $imgcity,
					'created_datetime' => date('Y-m-d H:i:s'),
					'deleted' => 0
				]);

				session()->setFlashdata('success', 'Success! Brand Added Successfully.');
				return redirect()->to(site_url('cms/citieslist'));	
			}else{
				return view('cms/cities_add', ['validation' => $this->validator]);
			}

	}
}
