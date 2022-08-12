<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterCountries extends Model
{
    protected $DBGroup = 'default';

    protected $table = 'master_countries';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id', 
        'name', 
        'slug', 
        'code', 
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}