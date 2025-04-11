<?php

namespace App\Models;

use CodeIgniter\Model;

class ScheduleModel extends Model
{
    protected $table            = 'schedules';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['bus_id', 'destination_id', 'departure_date', 'departure_time', 'price', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;
}
