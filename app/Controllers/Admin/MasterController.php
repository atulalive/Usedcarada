<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\MasterCarBodies;
use App\Models\MasterCarBrands;
use App\Models\MasterCarFeatures;
use App\Models\MasterCarSpecificationsModel;
use App\Models\MasterCarSubBrands;
use App\Models\MasterCarSubBrandModels;
use App\Models\MasterCarTypes;
use App\Models\MasterFuels;
use App\Models\MasterKilometers;
use App\Models\MasterOwners;
use App\Models\MasterPrices;
use App\Models\MasterTransmitions;
use App\Models\MasterYears;
use App\Models\MasterCountries;
use App\Models\MasterStates;
use App\Models\MasterCities;



class MasterController extends BaseController
{
    private $CarBodies;

    public function __construct(){
        $this->CarBodies = new MasterCarBodies();
        $this->CarBrand = new MasterCarBrands();
        $this->CarFeatures = new MasterCarFeatures();
        $this->CarSpecifications = new MasterCarSpecificationsModel();
        $this->MasterCarSubBrands = new MasterCarSubBrands();
        $this->MasterCarSubBrandModels = new MasterCarSubBrandModels();
        $this->MasterCarTypes = new MasterCarTypes();
        $this->MasterFuels = new MasterFuels();
        $this->MasterKilometers = new MasterKilometers();
        $this->MasterOwners = new MasterOwners();
        $this->MasterPrices = new MasterPrices();
        $this->MasterTransmitions = new MasterTransmitions();
        $this->MasterYears = new MasterYears();
        $this->MasterCountries = new MasterCountries();
        $this->MasterStates = new MasterStates();
        $this->MasterCities = new MasterCities();
        
        
        
        
        

    }

    public function CarBodies()
    {
        return view('admin/master/CarBodies');
    }

    public function CarBodies_ajaxLoadData()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];
        // $orderable = $_REQUEST['orderable'];
        $search_value = $_REQUEST['search']['value'];
        $total_count = $this->CarBodies->total_count($search_value);
        $data = $this->CarBodies->data($search_value,$start, $length);
        
        $arrayList = [];
		$i = $_REQUEST['start'];
		foreach($data as $row) {
			$action = '
                <a href="javascript:void(0);" name="edit" data-id="'.$row->id.'" class="btn btn-sm btn-secondary edit">
                <i class="fa fa-edit"></i> Edit</a>
                <button name="deleteButton" data-id="'.$row->id.'" class="btn btn-sm btn-danger delete">
                <i class="fa fa-trash"></i> Delete</button>
                ';
			$arrayList [] = [
				++$i,
				$row->name,
				$row->slug,
				$action
			];
		}
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $arrayList   // total data array
        );

        echo json_encode($json_data);
    }

    public function CarBodies_Save(){
        $data = [
            'name' => $_POST['name'],
            'slug' => $_POST['slug'],
        ];
        
        if(isset($_POST['id']) && $_POST['id'] != ''){
            $res = $this->CarBodies->EditData($data);
        }else{
            $res = $this->CarBodies->SaveData($data);
        }
        if($res){
            echo true;
        }else{
            echo false;
        }
    }

    public function CarBodiesDelete(){
        $res = $this->CarBodies->delete($_POST['id']);
        if($res){
            echo true;
        }else{
            echo false;
        }
    }

    public function CarBodiesEdit(){
        $res = $this->CarBodies->find($_POST['id']);
        echo json_encode($res);
    }

    public function CarBrands(){
        return view('admin/master/CarBrands');
    }

    public function CarBrandList(){
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];
        // $orderable = $_REQUEST['orderable'];
        $search_value = $_REQUEST['search']['value'];
        $total_count = $this->CarBrand->total_count($search_value);
        $data = $this->CarBrand->data($search_value,$start, $length);
        
        $arrayList = [];
		$i = $_REQUEST['start'];
		foreach($data as $row) {
			$action = '
                <a href="'.base_url('public/admin/CarBrandEdit/'.$row->id).'" name="edit" class="btn btn-sm btn-secondary edit">
                <i class="fa fa-edit"></i> Edit</a>
                <button name="deleteButton" data-id="'.$row->id.'" class="btn btn-sm btn-danger delete">
                <i class="fa fa-trash"></i> Delete</button>
                ';
            $image = '<img src="'.base_url().'/public/upload-image/car-brands/'.$row->image.'" style="width: 135px; height: 68px;" />';
			$arrayList [] = [
				++$i,
				$row->name,
				$row->slug,
                $image,
				$action
			];
		}
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $arrayList   // total data array
        );

        echo json_encode($json_data);
    }

    public function addCarBrandView(){
       return view('admin/master/CarBrandAdd');
    }

    public function AddCarBrand(){
        if(isset($_POST['id']) && $_POST['id'] != ''){
            if(isset($_FILES['image']) && $_FILES['image']['name'] != ''){
                $input = $this->validate([
                    'name' => 'required',
                    'slug' => 'required',
                    'image' => [
                        'uploaded[image]',
                        'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
                    ],
                ]);
            }else{
                $input = $this->validate([
                    'name' => 'required',
                    'slug' => 'required',
                ]);
            }

            if (!$input) {
                echo view('admin/master/CarBrandAdd', [
                    'validation' => $this->validator
                ]);
            }else{
                if(isset($_FILES['image']) && $_FILES['image']['name'] != ''){
                    $img = $this->request->getFile('image');
                    $name = $img->getRandomName();
                    
                    $path_to_file = FCPATH . 'upload-image/car-brands/'.$_POST['old_image'];
                    if (! $img->hasMoved()) {
                        if(isset($_POST['old_image']) && $_POST['old_image'] != '' && file_exists($path_to_file)){
                            if(unlink($path_to_file)) {
                                if($img->move('upload-image/car-brands', $name)){
                                    $res = $this->CarBrand->update($_POST['id'],[
                                            'name' => $_POST['name'],
                                            'slug' => $_POST['slug'],
                                            'image' => $name,
                                    ]);
                                    if($res){
                                        session()->setFlashData('success','Data updated successfully !');
                                    }else{
                                        session()->setFlashData('errors', 'The data not update in database please try again !');
                                    }
                                }else{
                                    session()->setFlashData('errors' , 'The file has not move folder !');
                                }
                            }else{
                                session()->setFlashData('errors' , 'The data not update in database please try again !');
                            }
                        }else{
                            if($img->move('upload-image/car-brands', $name)){
                                $res = $this->CarBrand->update($_POST['id'],[
                                        'name' => $_POST['name'],
                                        'slug' => $_POST['slug'],
                                        'image' => $name,
                                ]);
                                if($res){
                                    session()->setFlashData('success','Data updated successfully !');
                                }else{
                                    session()->setFlashData('errors', 'The data not update in database please try again !');
                                }
                            }else{
                                session()->setFlashData('errors' , 'The file has not move folder !');
                            }
                        }
                        
                    }
                    return redirect()->to(base_url('public/admin/addCarBrandView'));
                }else{
                    $res = $this->CarBrand->update($_POST['id'],[
                        'name' => $_POST['name'],
                        'slug' => $_POST['slug'],
                        'image' => $_POST['old_image'],
                    ]);
                    if($res){
                        session()->setFlashData('success','Data updated successfully !');
                    }else{
                        session()->setFlashData('errors', 'The data not update in database please try again !');
                    }
                    return redirect()->to(base_url('public/admin/addCarBrandView'));
                }
            }

        }else{
            $input = $this->validate([
                'name' => 'required',
                'slug' => 'required',
                'image' => [
                    'uploaded[image]',
                    'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
                ],
            ]);
            if (!$input) {
                echo view('admin/master/CarBrandAdd', [
                    'validation' => $this->validator
                ]);
            } else {
                $img = $this->request->getFile('image');
                $name = $img->getRandomName();
              
                if (! $img->hasMoved()) {
                    if($img->move('upload-image/car-brands', $name)){
                       $res = $this->CarBrand->save([
                            'name' => $_POST['name'],
                            'slug' => $_POST['slug'],
                            'image' => $name,
                       ]);
                       if($res){
                        session()->setFlashData('success','Data inserted successfully !');
                       }else{
                        session()->setFlashData('errors', 'The data not insert in database please try again !');
                       }
                    }else{
                        session()->setFlashData('errors' , 'The file has not move folder !');
                    }
                }
                    return redirect()->to(base_url('public/admin/addCarBrandView'));
            }
        }
        
    }

    public function CarBrandDelete(){
        $res = $this->CarBrand->delete($_POST['id']);
        echo ($res)? true:false;
    }

    public function CarBrandEdit($id){
        $res['data'] = $this->CarBrand->find($id);
        return view('admin/master/CarBrandAdd',$res);
    }


    public function CarFeaturesListView(){
        return view('admin/master/CarFeatures');
    }

    public function CarFeatures_loaddata(){
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];
        // $orderable = $_REQUEST['orderable'];
        $search_value = $_REQUEST['search']['value'];
        $total_count = $this->CarFeatures->total_count($search_value);
        $data = $this->CarFeatures->data($search_value,$start, $length);
        
        $arrayList = [];
		$i = $_REQUEST['start'];
		foreach($data as $row) {
			$action = '
                <a href="javascript:void(0);" name="edit" data-id="'.$row->id.'" class="btn btn-sm btn-secondary edit">
                <i class="fa fa-edit"></i> Edit</a>
                <button name="deleteButton" data-id="'.$row->id.'" class="btn btn-sm btn-danger delete">
                <i class="fa fa-trash"></i> Delete</button>
                ';
			$arrayList [] = [
				++$i,
				$row->name,
				$row->slug,
				$action
			];
		}
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $arrayList   // total data array
        );

        echo json_encode($json_data);
    }


    public function CarFeatures_Save(){
        $data = [
            'name' => $_POST['name'],
            'slug' => $_POST['slug'],
        ];
        
        if(isset($_POST['id']) && $_POST['id'] != ''){
            $res = $this->CarFeatures->update($_POST['id'],$data);
        }else{
            $res = $this->CarFeatures->save($data);
        }
        if($res){
            echo true;
        }else{
            echo false;
        }
    }

    public function CarFeaturesEdit(){
        $res = $this->CarFeatures->find($_POST['id']);
        echo json_encode($res);
    }

    public function CarFeaturesDelete(){
        $res = $this->CarFeatures->delete($_POST['id']);
        if($res){
            echo true;
        }else{
            echo false;
        }
    }

    public function CarSpecificationsView(){
        return view('admin/master/CarSpecifications');
    }

    public function CarSpecifications_loaddata(){
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];
        // $orderable = $_REQUEST['orderable'];
        $search_value = $_REQUEST['search']['value'];
        $total_count = $this->CarSpecifications->total_count($search_value);
        $data = $this->CarSpecifications->data($search_value,$start, $length);
        
        $arrayList = [];
		$i = $_REQUEST['start'];
		foreach($data as $row) {
			$action = '
                <a href="javascript:void(0);" name="edit" data-id="'.$row->id.'" class="btn btn-sm btn-secondary edit">
                <i class="fa fa-edit"></i> Edit</a>
                <button name="deleteButton" data-id="'.$row->id.'" class="btn btn-sm btn-danger delete">
                <i class="fa fa-trash"></i> Delete</button>
                ';
			$arrayList [] = [
				++$i,
				$row->name,
				$row->slug,
				$action
			];
		}
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $arrayList   // total data array
        );

        echo json_encode($json_data);
    }

    public function CarSpecifications_Save(){
        $data = [
            'name' => $_POST['name'],
            'slug' => $_POST['slug'],
        ];
        
        if(isset($_POST['id']) && $_POST['id'] != ''){
            $res = $this->CarSpecifications->update($_POST['id'],$data);
        }else{
            $res = $this->CarSpecifications->save($data);
        }
        if($res){
            echo true;
        }else{
            echo false;
        }
    }

    public function CarSpecificationsDelete(){
        $res = $this->CarSpecifications->delete($_POST['id']);
        if($res){
            echo true;
        }else{
            echo false;
        }
    }

    public function CarSpecificationsEdit(){
        $res = $this->CarSpecifications->find($_POST['id']);
        echo json_encode($res);
    }


    public function CarSubBrandsListView(){
        return view('admin/master/CarSubBrands');
    }

    public function CarSubBrandList(){
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];
        // $orderable = $_REQUEST['orderable'];
        $search_value = $_REQUEST['search']['value'];
        $total_count = $this->MasterCarSubBrands->total_count($search_value);
        $data = $this->MasterCarSubBrands->data($search_value,$start, $length);
        $arrayList = [];
		$i = $_REQUEST['start'];
		foreach($data as $row) {
			$action = '
                <a href="'.base_url('public/admin/CarSubBrandEdit/'.$row->id).'" name="edit" class="btn btn-sm btn-secondary edit">
                <i class="fa fa-edit"></i> Edit</a>
                <button name="deleteButton" data-id="'.$row->id.'" class="btn btn-sm btn-danger delete">
                <i class="fa fa-trash"></i> Delete</button>
                ';
            $image = '<img src="'.base_url().'/public/upload-image/car-sub-brands/'.$row->image.'" style="width: 135px; height: 68px;" />';
			$arrayList [] = [
				++$i,
                $row->bName,
				$row->name,
				$row->slug,
                $image,
				$action
			];
		}
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $arrayList   // total data array
        );

        echo json_encode($json_data);
    }


    public function addCarSubBrandView(){
        $data['brand'] = $this->CarBrand->findAll();
       
        return view('admin/master/addCarSubBrand',$data);

    }

    public function AddCarSubBrand(){
        if(isset($_POST['id']) && $_POST['id'] != ''){
            if(isset($_FILES['image']) && $_FILES['image']['name'] != ''){
                $input = $this->validate([
                    'brand_name' => 'required',
                    'sub_brand_name' => 'required',
                    'slug' => 'required',
                    'image' => [
                        'uploaded[image]',
                        'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
                    ],
                ]);
            }else{
                $input = $this->validate([
                    'brand_name' => 'required',
                    'sub_brand_name' => 'required',
                    'slug' => 'required',
                ]);
            }

            if (!$input) {
                $data['brand'] = $this->CarBrand->findAll();
                    echo view('admin/master/addCarSubBrand', $data,[
                    'validation' => $this->validator,
                ]);
            }else{
                if(isset($_FILES['image']) && $_FILES['image']['name'] != ''){
                    $img = $this->request->getFile('image');
                    $name = $img->getRandomName();
                    
                    $path_to_file = FCPATH . 'upload-image/car-sub-brands/'.$_POST['old_image'];
                    if (! $img->hasMoved()) {
                        if(isset($_POST['old_image']) && $_POST['old_image'] != '' && file_exists($path_to_file)){
                            if(unlink($path_to_file)) {
                                if($img->move('upload-image/car-sub-brands', $name)){
                                    $res = $this->MasterCarSubBrands->update($_POST['id'],[
                                            'brand_id' => $_POST['brand_name'],
                                            'name' => $_POST['sub_brand_name'],
                                            'slug' => $_POST['slug'],
                                            'image' => $name,
                                    ]);
                                    if($res){
                                        session()->setFlashData('success','Data updated successfully !');
                                    }else{
                                        session()->setFlashData('errors', 'The data not update in database please try again !');
                                    }
                                }else{
                                    session()->setFlashData('errors' , 'The file has not move folder !');
                                }
                            }else{
                                session()->setFlashData('errors' , 'The data not update in database please try again !');
                            }
                        }else{
                            if($img->move('upload-image/car-sub-brands', $name)){
                                $res = $this->MasterCarSubBrands->update($_POST['id'],[
                                        'brand_id' => $_POST['brand_name'],
                                        'name' => $_POST['sub_brand_name'],
                                        'slug' => $_POST['slug'],
                                        'image' => $name,
                                ]);
                                if($res){
                                    session()->setFlashData('success','Data updated successfully !');
                                }else{
                                    session()->setFlashData('errors', 'The data not update in database please try again !');
                                }
                            }else{
                                session()->setFlashData('errors' , 'The file has not move folder !');
                            }
                        }
                        
                    }
                    return redirect()->to(base_url('public/admin/CarSubBrandsList'));
                }else{
                    $res = $this->CarBrand->update($_POST['id'],[
                        'brand_id' => $_POST['brand_name'],
                        'name' => $_POST['sub_brand_name'],
                        'slug' => $_POST['slug'],
                        'image' => $_POST['old_image'],
                    ]);
                    if($res){
                        session()->setFlashData('success','Data updated successfully !');
                    }else{
                        session()->setFlashData('errors', 'The data not update in database please try again !');
                    }
                    return redirect()->to(base_url('public/admin/CarSubBrandsList'));
                }
            }

        }else{
            $input = $this->validate([
                'brand_name' => 'required',
                'sub_brand_name' => 'required',
                'slug' => 'required',
                'image' => [
                    'uploaded[image]',
                    'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
                ],
            ]);
            if (!$input) {
                $data['brand'] = $this->CarBrand->findAll();
                echo view('admin/master/addCarSubBrand', $data,[
                    'validation' => $this->validator,
                ]);
            } else {
                $img = $this->request->getFile('image');
                $name = $img->getRandomName();
              
                if (! $img->hasMoved()) {
                    if($img->move('upload-image/car-sub-brands', $name)){
                       $res = $this->MasterCarSubBrands->save([
                            'brand_id' => $_POST['brand_name'],
                            'name' => $_POST['sub_brand_name'],
                            'slug' => $_POST['slug'],
                            'image' => $name,
                       ]);
                       if($res){
                        session()->setFlashData('success','Data inserted successfully !');
                       }else{
                        session()->setFlashData('errors', 'The data not insert in database please try again !');
                       }
                    }else{
                        session()->setFlashData('errors' , 'The file has not move folder !');
                    }
                }
                    return redirect()->to(base_url('public/admin/addCarSubBrandView'));
            }
        }
    }

    public function CarSubBrandEdit($id){
        $data['data'] = $this->MasterCarSubBrands->find($id);
        $data['brand'] = $this->CarBrand->findAll();
       return view('admin/master/addCarSubBrand', $data);
    }

    public function CarSubBrandDelete(){
        $res = $this->MasterCarSubBrands->delete($_POST['id']);
        if($res){
            echo true;
        }else{
            echo false;
        }
    }


    public function CarSubNextBrandsListView(){
        return view('admin/master/CarSubNextBrands');
    }

    public function CarSubNextBrandList(){
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];
        // $orderable = $_REQUEST['orderable'];
        $search_value = $_REQUEST['search']['value'];
        $total_count = $this->MasterCarSubBrandModels->total_count($search_value);
        $data = $this->MasterCarSubBrandModels->data($search_value,$start, $length);
        $arrayList = [];
		$i = $_REQUEST['start'];
		foreach($data as $row) {
			$action = '
                <a href="'.base_url('public/admin/CarSubNextBrandEdit/'.$row->id).'" name="edit" class="btn btn-sm btn-secondary edit">
                <i class="fa fa-edit"></i> Edit</a>
                <button name="deleteButton" data-id="'.$row->id.'" class="btn btn-sm btn-danger delete">
                <i class="fa fa-trash"></i> Delete</button>
                ';
            $image = '<img src="'.base_url().'/public/upload-image/car-sub-next-brands/'.$row->image.'" style="width: 135px; height: 68px;" />';
			$arrayList [] = [
				++$i,
                $row->bName,
                $row->sbName,
				$row->name,
				$row->slug,
                $image,
				$action
			];
		}
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $arrayList   // total data array
        );

        echo json_encode($json_data);
    }

    public function addCarSubNextBrandView(){
        $data['brand'] = $this->CarBrand->findAll();
        return view('admin/master/AddCarSubNextBrands',$data);
    }


    public function FindSubBrandData(){
        $data = $this->MasterCarSubBrands->where('brand_id', $_POST['id'])->get()->getResultArray();
        $html = '<option value="">--Select One--</option>';
        foreach($data as $val){
            $select  = (isset($_POST['sub_brand']) && $val['id'] == $_POST['sub_brand'])? "selected": "";
            $html .= '<option value="'.$val['id'].'" '.$select.'>'.$val['name'].'</option>';
        }
        echo $html;
    }

    public function AddCarSubNextBrand(){
        if(isset($_POST['id']) && $_POST['id'] != ''){
            if(isset($_FILES['image']) && $_FILES['image']['name'] != ''){
                $input = $this->validate([
                    'brand_name' => 'required',
                    'brand_sub_name' => 'required',
                    'sub_next_brand_name' => 'required',
                    'slug' => 'required',
                    'image' => [
                        'uploaded[image]',
                        'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
                    ],
                ]);
            }else{
                $input = $this->validate([
                    'brand_name' => 'required',
                    'brand_sub_name' => 'required',
                    'sub_next_brand_name' => 'required',
                    'slug' => 'required',
                ]);
            }

            if (!$input) {
                $data['brand'] = $this->CarBrand->findAll();
                    echo view('admin/master/AddCarSubNextBrands', $data,[
                    'validation' => $this->validator,
                ]);
            }else{
                if(isset($_FILES['image']) && $_FILES['image']['name'] != ''){
                    $img = $this->request->getFile('image');
                    $name = $img->getRandomName();
                    
                    $path_to_file = FCPATH . 'upload-image/car-sub-next-brands/'.$_POST['old_image'];
                    if (! $img->hasMoved()) {
                        if(isset($_POST['old_image']) && $_POST['old_image'] != '' && file_exists($path_to_file)){
                            if(unlink($path_to_file)) {
                                if($img->move('upload-image/car-sub-next-brands', $name)){
                                    $res = $this->MasterCarSubBrandModels->update($_POST['id'],[
                                            'brand_id' => $_POST['brand_name'],
                                            'sub_brand_id' => $_POST['brand_sub_name'],
                                            'name' => $_POST['sub_next_brand_name'],
                                            'slug' => $_POST['slug'],
                                            'image' => $name,
                                    ]);
                                    if($res){
                                        session()->setFlashData('success','Data updated successfully !');
                                    }else{
                                        session()->setFlashData('errors', 'The data not update in database please try again !');
                                    }
                                }else{
                                    session()->setFlashData('errors' , 'The file has not move folder !');
                                }
                            }else{
                                session()->setFlashData('errors' , 'The data not update in database please try again !');
                            }
                        }else{
                            if($img->move('upload-image/car-sub-next-brands', $name)){
                                $res = $this->MasterCarSubBrandModels->update($_POST['id'],[
                                            'brand_id' => $_POST['brand_name'],
                                            'sub_brand_id' => $_POST['brand_sub_name'],
                                            'name' => $_POST['sub_next_brand_name'],
                                            'slug' => $_POST['slug'],
                                            'image' => $name,
                                ]);
                                if($res){
                                    session()->setFlashData('success','Data updated successfully !');
                                }else{
                                    session()->setFlashData('errors', 'The data not update in database please try again !');
                                }
                            }else{
                                session()->setFlashData('errors' , 'The file has not move folder !');
                            }
                        }
                        
                    }
                    return redirect()->to(base_url('public/admin/CarSubNextBrandsList'));
                }else{
                    $res = $this->CarBrand->update($_POST['id'],[
                        'brand_id' => $_POST['brand_name'],
                        'name' => $_POST['sub_brand_name'],
                        'slug' => $_POST['slug'],
                        'image' => $_POST['old_image'],
                    ]);
                    if($res){
                        session()->setFlashData('success','Data updated successfully !');
                    }else{
                        session()->setFlashData('errors', 'The data not update in database please try again !');
                    }
                    return redirect()->to(base_url('public/admin/CarSubBrandsList'));
                }
            }

        }else{
            $input = $this->validate([
                'brand_name' => 'required',
                'brand_sub_name' => 'required',
                'sub_next_brand_name' => 'required',
                'slug' => 'required',
                'image' => [
                    'uploaded[image]',
                    'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
                ],
            ]);
            if (!$input) {
                $data['brand'] = $this->CarBrand->findAll();
                echo view('admin/master/AddCarSubNextBrands', $data,[
                    'validation' => $this->validator,
                ]);
            } else {
                $img = $this->request->getFile('image');
                $name = $img->getRandomName();
              
                if (! $img->hasMoved()) {
                    if($img->move('upload-image/car-sub-next-brands', $name)){
                       $res = $this->MasterCarSubBrandModels->save([
                            'brand_id' => $_POST['brand_name'],
                            'sub_brand_id' => $_POST['brand_sub_name'],
                            'name' => $_POST['sub_next_brand_name'],
                            'slug' => $_POST['slug'],
                            'image' => $name,
                       ]);
                       if($res){
                        session()->setFlashData('success','Data inserted successfully !');
                       }else{
                        session()->setFlashData('errors', 'The data not insert in database please try again !');
                       }
                    }else{
                        session()->setFlashData('errors' , 'The file has not move folder !');
                    }
                }
                    return redirect()->to(base_url('public/admin/addCarSubNextBrandView'));
            }
        }
    }

    public function CarSubNextBrandEdit($id){
        $data['brand'] = $this->CarBrand->findAll();
        $data['data'] = $this->MasterCarSubBrandModels->find($id);
        return view('admin/master/AddCarSubNextBrands',$data);
    }

    public function CarSubNextBrandDelete(){
        $res = $this->MasterCarSubBrandModels->delete($_POST['id']);
        if($res){
            echo true;
        }else{
            echo false;
        }
    }


    public function CarTypeListView(){
        return view('admin/master/CarType');
    }

    public function CarType_loaddata(){
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];
        // $orderable = $_REQUEST['orderable'];
        $search_value = $_REQUEST['search']['value'];
        $total_count = $this->MasterCarTypes->total_count($search_value);
        $data = $this->MasterCarTypes->data($search_value,$start, $length);
        
        $arrayList = [];
		$i = $_REQUEST['start'];
		foreach($data as $row) {
			$action = '
                <a href="javascript:void(0);" name="edit" data-id="'.$row->id.'" class="btn btn-sm btn-secondary edit">
                <i class="fa fa-edit"></i> Edit</a>
                <button name="deleteButton" data-id="'.$row->id.'" class="btn btn-sm btn-danger delete">
                <i class="fa fa-trash"></i> Delete</button>
                ';
			$arrayList [] = [
				++$i,
				$row->name,
				$row->slug,
				$action
			];
		}
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $arrayList   // total data array
        );

        echo json_encode($json_data);
    }


    public function CarType_Save(){
        $data = [
            'name' => $_POST['name'],
            'slug' => $_POST['slug'],
        ];
        
        if(isset($_POST['id']) && $_POST['id'] != ''){
            $res = $this->MasterCarTypes->update($_POST['id'],$data);
        }else{
            $res = $this->MasterCarTypes->save($data);
        }
        if($res){
            echo true;
        }else{
            echo false;
        }
    }

    public function CarTypeEdit(){
        $res = $this->MasterCarTypes->find($_POST['id']);
        echo json_encode($res);
    }

    public function CarTypeDelete(){
        $res = $this->MasterCarTypes->delete($_POST['id']);
        echo ($res)? true:false;
    }

    public function CarFuleListView(){
        return view('admin/master/CarFule');
    }

    public function CarFule_loaddata(){
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];
        // $orderable = $_REQUEST['orderable'];
        $search_value = $_REQUEST['search']['value'];
        $total_count = $this->MasterFuels->total_count($search_value);
        $data = $this->MasterFuels->data($search_value,$start, $length);
        
        $arrayList = [];
		$i = $_REQUEST['start'];
		foreach($data as $row) {
			$action = '
                <a href="javascript:void(0);" name="edit" data-id="'.$row->id.'" class="btn btn-sm btn-secondary edit">
                <i class="fa fa-edit"></i> Edit</a>
                <button name="deleteButton" data-id="'.$row->id.'" class="btn btn-sm btn-danger delete">
                <i class="fa fa-trash"></i> Delete</button>
                ';
			$arrayList [] = [
				++$i,
				$row->name,
				$row->slug,
				$action
			];
		}
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $arrayList   // total data array
        );

        echo json_encode($json_data);
    }


    public function CarFule_Save(){
        $data = [
            'name' => $_POST['name'],
            'slug' => $_POST['slug'],
        ];
        
        if(isset($_POST['id']) && $_POST['id'] != ''){
            $res = $this->MasterFuels->update($_POST['id'],$data);
        }else{
            $res = $this->MasterFuels->save($data);
        }
        if($res){
            echo true;
        }else{
            echo false;
        }
    }

    public function CarFuleEdit(){
        $res = $this->MasterFuels->find($_POST['id']);
        echo json_encode($res);
    }

    public function CarFuleDelete(){
        $res = $this->MasterFuels->delete($_POST['id']);
        echo ($res)? true:false;
    }


    public function CarKiloMetersListView(){
        return view('admin/master/CarKiloMeters');
    }

    public function CarKiloMeters_loaddata(){
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];
        // $orderable = $_REQUEST['orderable'];
        $search_value = $_REQUEST['search']['value'];
        $total_count = $this->MasterKilometers->total_count($search_value);
        $data = $this->MasterKilometers->data($search_value,$start, $length);
        
        $arrayList = [];
		$i = $_REQUEST['start'];
		foreach($data as $row) {
			$action = '
                <a href="javascript:void(0);" name="edit" data-id="'.$row->id.'" class="btn btn-sm btn-secondary edit">
                <i class="fa fa-edit"></i> Edit</a>
                <button name="deleteButton" data-id="'.$row->id.'" class="btn btn-sm btn-danger delete">
                <i class="fa fa-trash"></i> Delete</button>
                ';
			$arrayList [] = [
				++$i,
				$row->distance,
				$row->display_distane,
				$action
			];
		}
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $arrayList   // total data array
        );

        echo json_encode($json_data);
    }


    public function CarKiloMeters_Save(){
        $data = [
            'distance' => $_POST['distance'],
            'display_distane' => $_POST['display_distane'],
        ];
        
        if(isset($_POST['id']) && $_POST['id'] != ''){
            $res = $this->MasterKilometers->update($_POST['id'],$data);
        }else{
            $res = $this->MasterKilometers->save($data);
        }
        if($res){
            echo true;
        }else{
            echo false;
        }
    }

    public function CarKiloMetersEdit(){
        $res = $this->MasterKilometers->find($_POST['id']);
        echo json_encode($res);
    }

    public function CarKiloMetersDelete(){
        $res = $this->MasterKilometers->delete($_POST['id']);
        echo ($res)? true:false;
    }


    public function CarOwnersListView(){
        return view('admin/master/CarOwners');
    }

    public function CarOwners_loaddata(){
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];
        // $orderable = $_REQUEST['orderable'];
        $search_value = $_REQUEST['search']['value'];
        $total_count = $this->MasterOwners->total_count($search_value);
        $data = $this->MasterOwners->data($search_value,$start, $length);
        
        $arrayList = [];
		$i = $_REQUEST['start'];
		foreach($data as $row) {
			$action = '
                <a href="javascript:void(0);" name="edit" data-id="'.$row->id.'" class="btn btn-sm btn-secondary edit">
                <i class="fa fa-edit"></i> Edit</a>
                <button name="deleteButton" data-id="'.$row->id.'" class="btn btn-sm btn-danger delete">
                <i class="fa fa-trash"></i> Delete</button>
                ';
			$arrayList [] = [
				++$i,
				$row->name,
				$row->slug,
				$action
			];
		}
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $arrayList   // total data array
        );

        echo json_encode($json_data);
    }


    public function CarOwners_Save(){
        $data = [
            'name' => $_POST['name'],
            'slug' => $_POST['slug'],
        ];
        
        if(isset($_POST['id']) && $_POST['id'] != ''){
            $res = $this->MasterOwners->update($_POST['id'],$data);
        }else{
            $res = $this->MasterOwners->save($data);
        }
        if($res){
            echo true;
        }else{
            echo false;
        }
    }

    public function CarOwnersEdit(){
        $res = $this->MasterOwners->find($_POST['id']);
        echo json_encode($res);
    }

    public function CarOwnersDelete(){
        $res = $this->MasterOwners->delete($_POST['id']);
        echo ($res)? true:false;
    }


    public function CarPricesListView(){
        return view('admin/master/CarPrices');
    }

    public function CarPrices_loaddata(){
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];
        // $orderable = $_REQUEST['orderable'];
        $search_value = $_REQUEST['search']['value'];
        $total_count = $this->MasterPrices->total_count($search_value);
        $data = $this->MasterPrices->data($search_value,$start, $length);
        
        $arrayList = [];
		$i = $_REQUEST['start'];
		foreach($data as $row) {
			$action = '
                <a href="javascript:void(0);" name="edit" data-id="'.$row->id.'" class="btn btn-sm btn-secondary edit">
                <i class="fa fa-edit"></i> Edit</a>
                <button name="deleteButton" data-id="'.$row->id.'" class="btn btn-sm btn-danger delete">
                <i class="fa fa-trash"></i> Delete</button>
                ';
			$arrayList [] = [
				++$i,
				$row->name,
				$row->slug,
				$action
			];
		}
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $arrayList   // total data array
        );

        echo json_encode($json_data);
    }


    public function CarPrices_Save(){
        $data = [
            'name' => $_POST['name'],
            'slug' => $_POST['slug'],
        ];
        
        if(isset($_POST['id']) && $_POST['id'] != ''){
            $res = $this->MasterPrices->update($_POST['id'],$data);
        }else{
            $res = $this->MasterPrices->save($data);
        }
        if($res){
            echo true;
        }else{
            echo false;
        }
    }

    public function CarPricesEdit(){
        $res = $this->MasterPrices->find($_POST['id']);
        echo json_encode($res);
    }

    public function CarPricesDelete(){
        $res = $this->MasterPrices->delete($_POST['id']);
        echo ($res)? true:false;
    }

    public function CarTransmitionsListView(){
        return view('admin/master/CarTransmitions');
    }

    public function CarTransmitions_loaddata(){
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];
        // $orderable = $_REQUEST['orderable'];
        $search_value = $_REQUEST['search']['value'];
        $total_count = $this->MasterTransmitions->total_count($search_value);
        $data = $this->MasterTransmitions->data($search_value,$start, $length);
        
        $arrayList = [];
		$i = $_REQUEST['start'];
		foreach($data as $row) {
			$action = '
                <a href="javascript:void(0);" name="edit" data-id="'.$row->id.'" class="btn btn-sm btn-secondary edit">
                <i class="fa fa-edit"></i> Edit</a>
                <button name="deleteButton" data-id="'.$row->id.'" class="btn btn-sm btn-danger delete">
                <i class="fa fa-trash"></i> Delete</button>
                ';
			$arrayList [] = [
				++$i,
				$row->name,
				$row->slug,
				$action
			];
		}
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $arrayList   // total data array
        );

        echo json_encode($json_data);
    }


    public function CarTransmitions_Save(){
        $data = [
            'name' => $_POST['name'],
            'slug' => $_POST['slug'],
        ];
        
        if(isset($_POST['id']) && $_POST['id'] != ''){
            $res = $this->MasterTransmitions->update($_POST['id'],$data);
        }else{
            $res = $this->MasterTransmitions->save($data);
        }
        if($res){
            echo true;
        }else{
            echo false;
        }
    }

    public function CarTransmitionsEdit(){
        $res = $this->MasterTransmitions->find($_POST['id']);
        echo json_encode($res);
    }

    public function CarTransmitionsDelete(){
        $res = $this->MasterTransmitions->delete($_POST['id']);
        echo ($res)? true:false;
    }


    public function CarYearsListView(){
        return view('admin/master/CarYears');
    }

    public function CarYears_loaddata(){
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];
        // $orderable = $_REQUEST['orderable'];
        $search_value = $_REQUEST['search']['value'];
        $total_count = $this->MasterYears->total_count($search_value);
        $data = $this->MasterYears->data($search_value,$start, $length);
        
        $arrayList = [];
		$i = $_REQUEST['start'];
		foreach($data as $row) {
			$action = '
                <a href="javascript:void(0);" name="edit" data-id="'.$row->id.'" class="btn btn-sm btn-secondary edit">
                <i class="fa fa-edit"></i> Edit</a>
                <button name="deleteButton" data-id="'.$row->id.'" class="btn btn-sm btn-danger delete">
                <i class="fa fa-trash"></i> Delete</button>
                ';
			$arrayList [] = [
				++$i,
				$row->min,
				$row->max,
				$action
			];
		}
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $arrayList   // total data array
        );

        echo json_encode($json_data);
    }


    public function CarYears_Save(){
        $data = [
            'min' => $_POST['Minimum'],
            'max' => $_POST['Maximum'],
        ];
        
        if(isset($_POST['id']) && $_POST['id'] != ''){
            $res = $this->MasterYears->update($_POST['id'],$data);
        }else{
            $res = $this->MasterYears->save($data);
        }
        if($res){
            echo true;
        }else{
            echo false;
        }
    }

    public function CarYearsEdit(){
        $res = $this->MasterYears->find($_POST['id']);
        echo json_encode($res);
    }

    public function CarYearsDelete(){
        $res = $this->MasterYears->delete($_POST['id']);
        echo ($res)? true:false;
    }


    public function CarCitiesListView(){
        $data['countary'] = $this->MasterCountries->findall();
        return view('admin/master/CarCities',$data);
    }

    public function CarCities_loaddata(){
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];
        // $orderable = $_REQUEST['orderable'];
        $search_value = $_REQUEST['search']['value'];
        $total_count = $this->MasterCities->total_count($search_value);
        $data = $this->MasterCities->data($search_value,$start, $length);
        
        $arrayList = [];
		$i = $_REQUEST['start'];
        // echo '<pre>';
        // print_r($data);
        // die;
		foreach($data as $row) {
			$action = '
                <a href="javascript:void(0);" name="edit" data-id="'.$row->id.'" class="btn btn-sm btn-secondary edit">
                <i class="fa fa-edit"></i> Edit</a>
                <button name="deleteButton" data-id="'.$row->id.'" class="btn btn-sm btn-danger delete">
                <i class="fa fa-trash"></i> Delete</button>
                ';
			$arrayList [] = [
				++$i,
				$row->cName,
				$row->sName,
				$row->name,
				$row->slug,
				$action
			];
		}
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $arrayList   // total data array
        );

        echo json_encode($json_data);
    }


    public function CarCities_Save(){
        $data = [
            'country_id' => $_POST['country_id'],
            'state_id' => $_POST['state_id'],
            'name' => $_POST['name'],
            'slug' => $_POST['slug'],
        ];
        
        if(isset($_POST['id']) && $_POST['id'] != ''){
            $res = $this->MasterCities->update($_POST['id'],$data);
        }else{
            $res = $this->MasterCities->save($data);
        }
        if($res){
            echo true;
        }else{
            echo false;
        }
    }

    public function CarCitiesEdit(){
        $res = $this->MasterCities->find($_POST['id']);
        echo json_encode($res);
    }

    public function CarCitiesDelete(){
        $res = $this->MasterCities->delete($_POST['id']);
        echo ($res)? true:false;
    }

    public function GetStates(){
       
        $data = $this->MasterStates->where('country_id', $_POST['id'])->get()->getResultArray();
        $html = '<option value="">--Select One--</option>';
        foreach($data as $val){
            $select  = (isset($_POST['state_id']) && $val['state_id'] == $_POST['state_id'])? "selected": "";
            $html .= '<option value="'.$val['id'].'" '.$select.'>'.$val['name'].'</option>';
        }
        echo $html;
    }



    public function CarCountriesListView(){
        return view('admin/master/CarCountries');
    }

    public function CarCountries_loaddata(){
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];
        // $orderable = $_REQUEST['orderable'];
        $search_value = $_REQUEST['search']['value'];
        $total_count = $this->MasterCountries->total_count($search_value);
        $data = $this->MasterCountries->data($search_value,$start, $length);
        
        $arrayList = [];
		$i = $_REQUEST['start'];
		foreach($data as $row) {
			$action = '
                <a href="javascript:void(0);" name="edit" data-id="'.$row->id.'" class="btn btn-sm btn-secondary edit">
                <i class="fa fa-edit"></i> Edit</a>
                <button name="deleteButton" data-id="'.$row->id.'" class="btn btn-sm btn-danger delete">
                <i class="fa fa-trash"></i> Delete</button>
                ';
			$arrayList [] = [
				++$i,
				$row->name,
				$row->slug,
                $row->code,
				$action
			];
		}
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $arrayList   // total data array
        );

        echo json_encode($json_data);
    }


    public function CarCountries_Save(){
        $data = [
            'name' => $_POST['name'],
            'slug' => $_POST['slug'],
            'code' => $_POST['code'],
        ];
        
        if(isset($_POST['id']) && $_POST['id'] != ''){
            $res = $this->MasterCountries->update($_POST['id'],$data);
        }else{
            $res = $this->MasterCountries->save($data);
        }
        if($res){
            echo true;
        }else{
            echo false;
        }
    }

    public function CarCountriesEdit(){
        $res = $this->MasterCountries->find($_POST['id']);
        echo json_encode($res);
    }

    public function CarCountriesDelete(){
        $res = $this->MasterCountries->delete($_POST['id']);
        echo ($res)? true:false;
    }

    public function CarStatesListView(){
        $data['countary'] = $this->MasterCountries->findall();
        return view('admin/master/CarStates',$data);
    }

    public function CarStates_loaddata(){
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];
        // $orderable = $_REQUEST['orderable'];
        $search_value = $_REQUEST['search']['value'];
        $total_count = $this->MasterStates->total_count($search_value);
        $data = $this->MasterStates->data($search_value,$start, $length);
        
        $arrayList = [];
		$i = $_REQUEST['start'];
        foreach($data as $row) {
			$action = '
                <a href="javascript:void(0);" name="edit" data-id="'.$row->id.'" class="btn btn-sm btn-secondary edit">
                <i class="fa fa-edit"></i> Edit</a>
                <button name="deleteButton" data-id="'.$row->id.'" class="btn btn-sm btn-danger delete">
                <i class="fa fa-trash"></i> Delete</button>
                ';
			$arrayList [] = [
				++$i,
                $row->cName,
				$row->name,
				$row->slug,
                $row->code,
				$action
			];
		}
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $arrayList   // total data array
        );

        echo json_encode($json_data);
    }


    public function CarStates_Save(){
        $data = [
            'country_id' => $_POST['country_id'],
            'name' => $_POST['name'],
            'slug' => $_POST['slug'],
            'code' => $_POST['code'],
        ];
        
        if(isset($_POST['id']) && $_POST['id'] != ''){
            $res = $this->MasterStates->update($_POST['id'],$data);
        }else{
            $res = $this->MasterStates->save($data);
        }
        if($res){
            echo true;
        }else{
            echo false;
        }
    }

    public function CarStatesEdit(){
        $res = $this->MasterStates->find($_POST['id']);
        echo json_encode($res);
    }

    public function CarStatesDelete(){
        $res = $this->MasterStates->delete($_POST['id']);
        echo ($res)? true:false;
    }
}





        