<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TerminalModel;

class HomeController extends BaseController
{
    public function index()
    {
        $terminalModel = new TerminalModel();

        $data['terminals'] = $terminalModel->findAll();

        return view('customer/v_home', $data);
    }
}
