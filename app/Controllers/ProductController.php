<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public function index(): string
    {
        return view('v_product');
    }

    public function detail(): string
    {
        return view('v_product_detail');
    }

    public function topSelling(): string
    {
        return view('v_top_selling');
    }

    public function newArrival(): string
    {
        return view('v_new_arrival');
    }
}
