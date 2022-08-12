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
}