<?php

namespace App\Models;

use CodeIgniter\Model;

class PassengerModel extends Model
{
    protected $table            = 'passengers';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['booking_id', 'name', 'seat_number', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;
}
