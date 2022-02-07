<?php

namespace App\Models\Cms;

use CodeIgniter\Model;

class Customer extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'customers';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id','first_name','last_name', 'user_name', 'contact', 'email',
        'password', 'is_email_verify', 'is_contact_verify', 'created_at', 'updated_at', 'deleted_at'
    ];

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


    function getAllCusotmerByMobileNo($mobileNo) {
        $customer = $this->db->query("SELECT * FROM customers WHERE contact =" . $mobileNo);
        
        if (count($customer->getResultArray()) <= 0) {
            $this->db->query("INSERT INTO customers (contact) VALUES('$mobileNo')");
            $customer = $this->db->query("SELECT * FROM customers WHERE contact = " . $mobileNo);
        }

        return $customer->getRowArray();

   }
}