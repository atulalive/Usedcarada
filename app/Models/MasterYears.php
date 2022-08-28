<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterYears extends Model
{
    protected $DBGroup = 'default';

    protected $table = 'master_years';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id', 
        'min', 
        'max', 
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';


    function total_count($search_value){
        if(!empty($search_value)){
            $total_countQuery = $this->db->query("SELECT * from master_years WHERE id like '%".$search_value."%' OR min like '%".$search_value."%' OR max like '%".$search_value."%'"); 
            return $total_countQuery->getResult();
        }else{
            $total_countQuery = $this->db->query("SELECT * from master_years"); 
            return $total_countQuery->getResult();
        }
        
    }

    function data($search_value,$start, $length){
        if(!empty($search_value)){
            $total_countQuery = $this->db->query("SELECT * from master_years WHERE id like '%".$search_value."%' OR min like '%".$search_value."%' OR max like '%".$search_value."%' limit $start, $length"); 
            return $total_countQuery->getResult();
        }else{
            $total_countQuery = $this->db->query("SELECT * from master_years limit $start, $length"); 
            return $total_countQuery->getResult();
        }
    }
}