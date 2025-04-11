<?php

namespace App\Models;

use CodeIgniter\Model;

class DestinationModel extends Model
{
    protected $table            = 'destinations';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['origin_terminal_id', 'destination_terminal_id', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;
}
