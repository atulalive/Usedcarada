<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterStates extends Model
{
    protected $DBGroup = 'default';

    protected $table = 'master_states';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id', 
        'country_id', 
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