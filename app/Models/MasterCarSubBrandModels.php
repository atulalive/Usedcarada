<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterCarSubBrandModels extends Model
{
    protected $DBGroup = 'default';

    protected $table = 'master_car_sub_brand_models';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id', 
        'brand_id', 
        'sub_brand_id', 
        'name', 
        'slug', 
        'image', 
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}