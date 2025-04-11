<?php

namespace App\Models;

use CodeIgniter\Model;

class PromoModel extends Model
{
    protected $table            = 'promos';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['code', 'description', 'discount_percent', 'max_discount', 'valid_from', 'valid_until', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;
}
