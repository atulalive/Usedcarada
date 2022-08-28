<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterCountries extends Model
{
    protected $DBGroup = 'default';

    protected $table = 'master_countries';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id', 
        'name', 
        'slug', 
        'code', 
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';


    function total_count($search_value){
        if(!empty($search_value)){
            $total_countQuery = $this->db->query("SELECT * from master_countries WHERE id like '%".$search_value."%' OR name like '%".$search_value."%' OR slug like '%".$search_value."%' OR code like '%".$search_value."%'"); 
            return $total_countQuery->getResult();
        }else{
            $total_countQuery = $this->db->query("SELECT * from master_countries"); 
            return $total_countQuery->getResult();
        }
        
    }

    function data($search_value,$start, $length){
        if(!empty($search_value)){
            $total_countQuery = $this->db->query("SELECT * from master_countries WHERE id like '%".$search_value."%' OR name like '%".$search_value."%' OR slug like '%".$search_value."%' OR code like '%".$search_value."%' limit $start, $length"); 
            return $total_countQuery->getResult();
        }else{
            $total_countQuery = $this->db->query("SELECT * from master_countries limit $start, $length"); 
            return $total_countQuery->getResult();
        } 
    }
}