<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterPrices extends Model
{
    protected $DBGroup = 'default';

    protected $table = 'master_prices';
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