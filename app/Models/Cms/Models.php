<?php

namespace App\Models\Cms;

use CodeIgniter\Model;

class Models extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'product_model';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['created_datetime','updated_datetime','brand_id','name','year','machine_name','thumbnail','deleted','user_id'];

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



    function model_list($data){

        $modelquery = $this->db->query("SELECT * FROM product_model WHERE deleted = 0 ORDER BY ".$data['sorting_column']." ".$data['sort']." "); 
         return $modelquery->getResultArray();

   }
}
