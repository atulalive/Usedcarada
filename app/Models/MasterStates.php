<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterStates extends Model
{
    protected $DBGroup = 'default';

    protected $table = 'master_states';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id', 
        'country_id', 
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
            $total_countQuery = $this->db->query("SELECT s.*,c.name as cName from master_states as s join master_countries as c on s.country_id = c.id  WHERE id like '%".$search_value."%' OR s.name like '%".$search_value."%' OR s.slug like '%".$search_value."%' c.name like '%".$search_value."%'"); 
            return $total_countQuery->getResult();
        }else{
            $total_countQuery = $this->db->query("SELECT s.*,c.name as cName from master_states as s join master_countries as c on s.country_id = c.id "); 
            return $total_countQuery->getResult();
        }
        
    }

    function data($search_value,$start, $length){
        if(!empty($search_value)){
            $total_countQuery = $this->db->query("SELECT s.*,c.name as cName from master_states as s join master_countries as c on s.country_id = c.id  WHERE id like '%".$search_value."%' OR s.name like '%".$search_value."%' OR s.slug like '%".$search_value."%' c.name like '%".$search_value."%' limit $start, $length"); 
            return $total_countQuery->getResult();
        }else{
            $total_countQuery = $this->db->query("SELECT s.*,c.name as cName from master_states as s join master_countries as c on s.country_id = c.id  limit $start, $length"); 
            return $total_countQuery->getResult();
        }
    }
}