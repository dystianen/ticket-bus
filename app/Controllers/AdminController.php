<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\UserModel;
use Config\Services;

class AdminController extends BaseController
{
    public function loginView()
    {
        return view("v_login");
    }

    public function loginAuth()
    {
        $session = session();
        $userModel = new AdminModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // Check if the login input is an email or username and query accordingly
        $data = $userModel
            ->where('name', $username)
            ->orWhere('email', $username)
            ->first();

        if ($data) {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);

            if ($authenticatePassword) {
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                ];

                $session->set($ses_data);
                return redirect()->to(base_url('/admin/manage-product'));
            } else {
                $session->setFlashdata('failed', 'Password is incorrect.');
                return redirect()->to(base_url('/login'));
            }
        } else {
            $session->setFlashdata('failed', 'Email or username does not exist.');
            return redirect()->to(base_url('/login'));
        }
    }

    public function registerView()
    {
        return view("v_register");
    }

    public function registerAuth()
    {
        helper(['form']);
        $userModel = new UserModel();
        $rules = [
            'name' => 'required|max_length[50]',
            'email' => 'required|max_length[100]|valid_email|is_unique[users.email]',
            'password' => 'required|max_length[50]',
        ];

        if ($this->validate($rules)) {
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'deleted_at' => null,
            ];

            $userModel->save($data);
            session()->setFlashdata('success', 'Registration Successfully.');
            return redirect()->to(base_url("/login"));
        } else {
            $validation = Services::validation();
            return redirect()->to(base_url('/register'))->withInput()->with('validation', $validation);
        }
    }

    function logout()
    {
        $session = session();
        $session->set(array(
            'user_id' => '',
            'user_name' => '',
            'email' => '',
            'role' => '',
            'is_logged_in' => FALSE
        ));
        $session->destroy();
        return redirect()->to(base_url('/login'));
    }

    public function profile()
    {
        $userModel = new UserModel();
        $session = session();
        $userId = $session->get('user_id');
        $user = $userModel->where('user_id', $userId)->first();

        $data = [
            'user' => $user,
        ];
        return view('customer/v_profile', $data);
    }
}
