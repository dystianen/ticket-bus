<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model
{
    protected $table            = 'payments';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['booking_id', 'amount', 'payment_method', 'proof_file', 'status', 'paid_at', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;
}
