<?php

namespace App\Models\Cms;

use CodeIgniter\Model;

class Country extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'country';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name'];

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


    function country_list($name){

        $countryquery = $this->db->query("SELECT * FROM country WHERE deleted = 0 ORDER BY ".$name['sorting_column'].''.$name['sort'].''); 
         return $countryquery->getResultArray();
   }

   public function addCountry($name)
   {
        $status = $this->db->query("INSERT INTO `country` (`id`, `name`, `deleted`) VALUES (NULL, ' . $name . ', '0');");
        if ($status) {
            return 1;
        } else { 
            return 0;
        }
   }

   public function getAllCountry() {

        $countries = $this->db->query("SELECT * FROM country WHERE 'delete' = 0");
        return $countries->getResultArray();

   }
   

}