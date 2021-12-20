<?php

namespace App\Models\Cms;

use CodeIgniter\Model;

class Brand extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'product_brand';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['created_datetime','updated_datetime','machine_name','brand_name','brand_thumbnail_image','year','added_by','action_by'];

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


    function brand_list($data){

        $brandquery = $this->db->query("SELECT * FROM product_brand WHERE deleted = 0 ORDER BY ".$data['sorting_column']." ".$data['sort']." "); 
         return $brandquery->getResultArray();

   }
}