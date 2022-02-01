<?php

namespace App\Models\Cms;

use CodeIgniter\Model;

class State extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'state1';
    protected $primaryKey       = 'id';
    protected $foreignKey       = 'country_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['state_name'];

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


    function state_list($state_name){

        $state1query = $this->db->query("SELECT * FROM state1 WHERE deleted = 0 ORDER BY ".$state_name['sorting_column'].''.$state_name['sort'].''); 
         return $state1query->getResultArray();
   }

   public function addstate($state_name)
   {
        $status = $this->db->query("INSERT INTO `state1` (`id`,`country_id`, `state_name`, `deleted`) VALUES (NULL, '',' . $state_name . ', '0');");
        if ($status) {
            return 1;
        } else {
            return 0;
        }        
   }


}