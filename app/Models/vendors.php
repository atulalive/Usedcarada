<?php

namespace App\Models;

use CodeIgniter\Model;

class Vendors extends Model
{
    protected $DBGroup = 'default';

    protected $table = 'vendors';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        `id`, 
        `first_name`, 
        `last_name`, 
        `user_name`, 
        `contact`, 
        `email`, 
        `password`, 
        `is_contact_verify`, 
        `is_email_verify`, 
        `created_at`, 
        `deleted_at`, 
        `updated_at`
    ];
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}