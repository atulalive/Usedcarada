<?php

namespace App\Models;

use CodeIgniter\Model;

class CarSpecifications extends Model
{
    protected $DBGroup = 'default';

    protected $table = 'car_specifications';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id', 
        'car_id', 
        'name', 
        'slug', 
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}