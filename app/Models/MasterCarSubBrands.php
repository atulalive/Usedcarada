<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterCarSubBrands extends Model
{
    protected $DBGroup = 'default';

    protected $table = 'master_car_sub_brands';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id', 
        'brand_id', 
        'name', 
        'slug', 
        'image', 
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    function total_count($search_value){
        if(!empty($search_value)){
            $total_countQuery = $this->db->query("SELECT  bs.*,b.name as bName from master_car_sub_brands as bs join master_car_brands as b  on bs.brand_id = b.id WHERE bs.id like '%".$search_value."%' OR bs.name like '%".$search_value."%' OR bs.slug like '%".$search_value."%' OR b.name like '%".$search_value."%'"); 
            return $total_countQuery->getResult();
        }else{
            $total_countQuery = $this->db->query("SELECT   bs.*,b.name as bName from master_car_sub_brands as bs join master_car_brands as b  on bs.brand_id = b.id"); 
            return $total_countQuery->getResult();
        }
        
    }

    function data($search_value,$start, $length){
        if(!empty($search_value)){
            $total_countQuery = $this->db->query("SELECT  bs.*,b.name as bName from master_car_sub_brands as bs join master_car_brands as b  on bs.brand_id = b.id WHERE bs.id like '%".$search_value."%' OR bs.name like '%".$search_value."%' OR bs.slug like '%".$search_value."%' OR b.name like '%".$search_value."%' limit $start, $length"); 
            return $total_countQuery->getResult();
        }else{
            $total_countQuery = $this->db->query("SELECT   bs.*,b.name as bName from master_car_sub_brands as bs join master_car_brands as b  on bs.brand_id = b.id limit $start, $length"); 
            return $total_countQuery->getResult();
        } 
    }
}