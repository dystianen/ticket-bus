<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table            = 'bookings';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'user_name',
        'user_email',
        'schedule_id',
        'promo_id',
        'total_passengers',
        'total_price',
        'status',
        'proof_of_payment',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $useTimestamps    = true;
}
