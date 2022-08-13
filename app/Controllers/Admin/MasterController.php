<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\MasterCarBodies;
use App\Models\MasterCarBrands;
use App\Models\MasterCarFeatures;
use App\Models\MasterCarSpecificationsModel;

class MasterController extends BaseController
{
    private $CarBodies;

    public function __construct(){
        $this->CarBodies = new MasterCarBodies();
        $this->CarBrand = new MasterCarBrands();
        $this->CarFeatures = new MasterCarFeatures();
        $this->CarSpecifications = new MasterCarSpecificationsModel();
        

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
}



        