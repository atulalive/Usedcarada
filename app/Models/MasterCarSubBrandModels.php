<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterCarSubBrandModels extends Model
{
    protected $DBGroup = 'default';

    protected $table = 'master_car_sub_brand_models';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id', 
        'brand_id', 
        'sub_brand_id', 
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
            $total_countQuery = $this->db->query("SELECT  bns.*,b.name as bName,sb.name as sbName from master_car_sub_brand_models as bns join master_car_brands as b  on b.id = bns.brand_id  join master_car_sub_brands as sb  on bns.sub_brand_id = sb.id WHERE bns.id like '%".$search_value."%' OR bns.name like '%".$search_value."%' OR bns.slug like '%".$search_value."%' OR b.name like '%".$search_value."%' OR sb.name like '%".$search_value."%'"); 
            return $total_countQuery->getResult();
        }else{
            $total_countQuery = $this->db->query("SELECT  bns.*,b.name as bName,sb.name as sbName from master_car_sub_brand_models as bns join master_car_brands as b  on bns.brand_id = b.id  join master_car_sub_brands as sb  on bns.sub_brand_id = sb.id"); 
            return $total_countQuery->getResult();
        }
        
    }

    function data($search_value,$start, $length){
        if(!empty($search_value)){
            $total_countQuery = $this->db->query("SELECT  bns.*,b.name as bName,sb.name as sbName from master_car_sub_brand_models as bns join master_car_brands as b  on bns.brand_id = b.id  join master_car_sub_brands as sb  on bns.sub_brand_id = sb.id WHERE bns.id like '%".$search_value."%' OR bns.name like '%".$search_value."%' OR bns.slug like '%".$search_value."%' OR b.name like '%".$search_value."%' OR sb.name like '%".$search_value."%' limit $start, $length"); 
            return $total_countQuery->getResult();
        }else{
            $total_countQuery = $this->db->query("SELECT  bns.*,b.name as bName,sb.name as sbName from master_car_sub_brand_models as bns join master_car_brands as b  on bns.brand_id = b.id  join master_car_sub_brands as sb  on bns.sub_brand_id = sb.id limit $start, $length"); 
            return $total_countQuery->getResult();
        } 
    }
}