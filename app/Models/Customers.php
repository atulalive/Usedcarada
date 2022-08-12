<?php

namespace App\Models;

use CodeIgniter\Model;

class Customers extends Model
{
    protected $DBGroup = 'default';

    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id', 
        'first_name', 
        'last_name', 
        'user_name', 
        'contact', 
        'email', 
        'password', 
        'is_email_verify', 
        'is_contact_verify', 
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}