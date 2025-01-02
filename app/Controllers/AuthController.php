<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function loginView()
    {
        return view("v_login");
    }
    public function registerView()
    {
        return view("v_register");
    }
}
