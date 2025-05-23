<?php

namespace App\Models;

use CodeIgniter\Model;

class BusModel extends Model
{
    protected $table            = 'buses';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['name', 'class', 'capacity', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;
}
