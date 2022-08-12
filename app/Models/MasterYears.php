<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterYears extends Model
{
    protected $DBGroup = 'default';

    protected $table = 'master_years';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id', 
        'min', 
        'max', 
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}