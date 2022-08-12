<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterFuels extends Model
{
    protected $DBGroup = 'default';

    protected $table = 'master_fuels';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id', 
        'name', 
        'slug', 
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}   