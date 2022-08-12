<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterKilometers extends Model
{
    protected $DBGroup = 'default';

    protected $table = 'master_kilometers';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id', 
        'distance', 
        'display_distane', 
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}