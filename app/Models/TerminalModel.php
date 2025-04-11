<?php

namespace App\Models;

use CodeIgniter\Model;

class TerminalModel extends Model
{
    protected $table            = 'terminals';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['name', 'location', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;
}
