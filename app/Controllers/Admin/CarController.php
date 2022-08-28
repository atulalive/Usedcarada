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



class CarController extends BaseController
{
    
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

    public function CarAddForm()
    {
        
        $data['sub_category'] = $this->MasterCarTypes->findall();
        $data['brand'] = $this->CarBrand->findall();
        $data['top_cities'] = $this->MasterCities->findall();
        
        return view('admin/car/CarAddForm',$data);
    }

    public function FindCarModal(){
        $data = $this->MasterCarSubBrands->where('brand_id', $_POST['id'])->get()->getResultArray();
        $html = '<option value="">--Select One--</option>';
        foreach($data as $val){
            $select  = (isset($_POST['state_id']) && $val['state_id'] == $_POST['state_id'])? "selected": "";
            $html .= '<option value="'.$val['id'].'" '.$select.'>'.$val['name'].'</option>';
        }
        echo $html;
    }

    public function FindCarSubModal(){
        $data = $this->MasterCarSubBrandModels->where('sub_brand_id', $_POST['id'])->get()->getResultArray();
        $html = '<option value="">--Select One--</option>';
        foreach($data as $val){
            $select  = (isset($_POST['state_id']) && $val['state_id'] == $_POST['state_id'])? "selected": "";
            $html .= '<option value="'.$val['id'].'" '.$select.'>'.$val['name'].'</option>';
        }
        echo $html;
    }
    

    public function CarAdd(){
        
            $input = $this->validate([
                'carname' => 'required',
                'sproduct_alias_name_hidden' => 'required',
                'product_alias_name' => 'required',
                'carprice' => 'required',
                'carsellprice' => 'required',
                'brand' => 'required',
                'model' => 'required',
                'submodel' => 'required',
                'cartype' => 'required',
                'city' => 'required',
                
                
                
                // 'image' => [
                //     'uploaded[image]',
                //     'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
                // ],
            ]);

            if (!$input) {
                $data['sub_category'] = $this->MasterCarTypes->findall();
                $data['brand'] = $this->CarBrand->findall();
                $data['top_cities'] = $this->MasterCities->findall();
                echo view('admin/car/CarAddForm', $data,[
                    'validation' => $this->validator
                ]);
            }else{
                echo 'hlo';
            }
        
    }
   
}





        