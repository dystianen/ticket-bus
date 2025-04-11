<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PromoModel;

class PromoController extends BaseController
{
    public function index()
    {
        $promoModel = new PromoModel();
        $data['promos'] = $promoModel->findAll();

        return view('admin/promo/v_manage_promo', $data);
    }

    public function create()
    {
        return view('admin/promo/v_create_promo');
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'code'             => 'required|is_unique[promos.code]',
            'description'      => 'required',
            'discount_percent' => 'required|numeric',
            'max_discount'     => 'required|numeric',
            'valid_from'       => 'required|valid_date',
            'valid_until'      => 'required|valid_date',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $validFrom = $this->request->getPost('valid_from');
        $validUntil = $this->request->getPost('valid_until');

        if (strtotime($validUntil) < strtotime($validFrom)) {
            return redirect()->back()->withInput()->with('errors', ['valid_until' => 'Valid Until must be the same or after Valid From.']);
        }

        $promoModel = new \App\Models\PromoModel();
        $promoModel->save([
            'code'             => $this->request->getPost('code'),
            'description'      => $this->request->getPost('description'),
            'discount_percent' => $this->request->getPost('discount_percent'),
            'max_discount'     => $this->request->getPost('max_discount'),
            'valid_from'       => $validFrom,
            'valid_until'      => $validUntil,
        ]);

        return redirect()->to('/admin/promo')->with('success', 'Promo added successfully');
    }
}
