<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterCarTypes extends Model
{
    protected $DBGroup = 'default';

    protected $table = 'master_car_types';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id', 
        'name', 
        'slug', 
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    function total_count($search_value){
        if(!empty($search_value)){
            $total_countQuery = $this->db->query("SELECT * from master_car_types WHERE id like '%".$search_value."%' OR name like '%".$search_value."%' OR slug like '%".$search_value."%'"); 
            return $total_countQuery->getResult();
        }else{
            $total_countQuery = $this->db->query("SELECT * from master_car_types"); 
            return $total_countQuery->getResult();
        }
        
    }

    function data($search_value,$start, $length){
        if(!empty($search_value)){
            $total_countQuery = $this->db->query("SELECT * from master_car_types WHERE id like '%".$search_value."%' OR name like '%".$search_value."%' OR slug like '%".$search_value."%' limit $start, $length"); 
            return $total_countQuery->getResult();
        }else{
            $total_countQuery = $this->db->query("SELECT * from master_car_types limit $start, $length"); 
            return $total_countQuery->getResult();
        } 
    }
}