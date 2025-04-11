<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table            = 'admins';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['username', 'password', 'email', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;
}
