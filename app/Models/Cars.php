<?php

namespace App\Models;

use CodeIgniter\Model;

class Cars extends Model
{
    protected $DBGroup = 'default';

    protected $table = 'cars';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id',
        'brand_name',
        'brand_name_slug', 
        'base_price', 
        'selling_price', 
        'discount', 
        'manufacturer_year', 
        'registration_year', 
        'fuel_type', 
        'kilometer_driven', 
        'engine_displacement', 
        'owner_type', 
        'rto', 
        'transmission', 
        'insurance_type', 
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}