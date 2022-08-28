<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterCities extends Model
{
    protected $DBGroup = 'default';

    protected $table = 'master_cities';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id', 
        'country_id', 
        'state_id', 
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
            $total_countQuery = $this->db->query("SELECT c.*,k.name as cName, s.name as sName from master_cities as c join master_countries as k on c.country_id = k.id join master_states as s on c.state_id = s.id WHERE c.id like '%".$search_value."%' OR c.name like '%".$search_value."%' OR c.slug like '%".$search_value."%' OR k.name like '%".$search_value."%' OR s.name like '%".$search_value."%' "); 
            return $total_countQuery->getResult();
        }else{
            $total_countQuery = $this->db->query("SELECT c.*,k.name as cName, s.name as sName from master_cities as c join master_countries as k on c.country_id = k.id join master_states as s on c.state_id = s.id"); 
            return $total_countQuery->getResult();
        }
        
    }

    function data($search_value,$start, $length){
        if(!empty($search_value)){
            $total_countQuery = $this->db->query("SELECT c.*,k.name as cName, s.name as sName from master_cities as c join master_countries as k on c.country_id = k.id join master_states as s on c.state_id = s.id WHERE c.id like '%".$search_value."%' OR c.name like '%".$search_value."%' OR c.slug like '%".$search_value."%' OR k.name like '%".$search_value."%' OR s.name like '%".$search_value."%' limit $start, $length"); 
            return $total_countQuery->getResult();
        }else{
            $total_countQuery = $this->db->query("SELECT c.*,k.name as cName, s.name as sName from master_cities as c join master_countries as k on c.country_id = k.id join master_states as s on c.state_id = s.id limit $start, $length"); 
            return $total_countQuery->getResult();
        } 
    }
}