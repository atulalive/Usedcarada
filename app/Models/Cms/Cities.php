<?php

namespace App\Models\Cms;

use CodeIgniter\Model;

class Cities extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'top_cities';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['created_datetime','updated_datetime','car_name','city_name','city_state','city_image_thumbnail','city_country','deleted'];


    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    function cities_list($data){

        $citiesquery = $this->db->query("SELECT * FROM top_cities WHERE deleted = 0 ORDER BY ".$data['sorting_column']." ".$data['sort']." "); 
         return $citiesquery->getResultArray();

   }
}
