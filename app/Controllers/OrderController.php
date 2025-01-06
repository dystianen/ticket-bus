<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class OrderController extends BaseController
{
    public function index()
    {
        return view('customer/v_my_order');
    }
}
