<?php

namespace App\Controllers;

use App\Models\Products;
use CodeIgniter\Config\Config;
use CodeIgniter\Controller;
use App\Libraries\Utilities;

helper('number');
class Home extends BaseController
{

    public function index()
    {
       
        return view('index_view');
    }



    public function about()
    {
        return view('about_view');
    }
    public function cardetails($key, $id)
    {
        $pro_detail = new Products();
        $data['id'] = $id;
        $data['key'] = $key;
        $data['product'] = $pro_detail->product_detail($data);
        $data['product']['overview'] = $pro_detail->getProductOverview(['product_id' => $data['product'][0]['pro_id'], 'single' => true, 'print' => false]);
        $data['product']['specifications'] = $pro_detail->getProductspecifications(['product_id' => $data['product'][0]['pro_id'], 'single' => true, 'print' => false]);

        if ($data['product'][0]['product_alias_name'] == $id) {
            $data['product']['image'] = $pro_detail->product_image(['pro_id' => $data['product'][0]['pro_id'], 'product_alias_name' => $data['product'][0]['product_alias_name']]);
        }
        if (!empty($data['product']) && ($data['product'][0]['product_alias_name'] == $data['id'])) {
            return view('cardetails_view', $data);
        } else {
            return redirect()->route('/');
        }
    }
    public function popularbrands($key, $id)
    {
        $pro_detail = new Products();
        $data['id'] = $id;
        $data['key'] = $key;
        $data['product']['brand'] = $pro_detail->getProductbrand(['product_id' => $data['product'][0]['id'],'single'=>true,'print'=>false]);
    }
    
    
    public function usedcar()
    {
        return view('usedcar_view');
    }
    public function category()
    {
        return view('category_view');
    }


    /*   AJAX Call function */

    public function search($seg, $seg1 = false, $seg2 = false)
    {
        $pro_detail = new Products();
        ##################################
        ######## For model serch   #######
        ##################################

        // echo 'first = '.$seg; // Will be 123 in all examples
        // echo 'second = '.$seg1; // false in first, 456 in second and third example
        // echo $seg2; // false in first and second, 789 in third
        $data = ['type'=>$seg, 'first'=>$seg1, 'second'=>$seg2];
        switch ($seg) {
            case "budget":
                return view('search_view',$data);
            case "model":
                return view('search_view',$data);
            default:
                break;
        }

        ##################################          
        
        # For Ajax calling method  #######
        ##################################
        if ($this->request->isAJAX()) {
            switch ($seg) {
                case "for-model":
                    $query = service('request')->getPost('id');
                    // var_dump($this->request->getPost('id'));
                    $get_brand_machine_name = $pro_detail->get_product_brands(['brand_machine_name' => $query, 'single' => true]);
                    $model = $pro_detail->get_product_model(['brand_id' => $get_brand_machine_name->id]);
                    return json_encode(["ticket" => 1, "succeed" => intval($model), 'data' => $model, 'message' => !empty($model)?"Successfully load model":"Faild to load model"]);
                default:
                    break;
            }
            
        }
    }
}
