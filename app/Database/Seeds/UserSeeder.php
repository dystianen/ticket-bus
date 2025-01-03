<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username'  => 'Administrator',
                'email'  =>  "admin@gmail.com",
                'password'  =>  password_hash("admin", PASSWORD_DEFAULT),
                'address' => 'Jaksel',
                'role'  => 'admin',
                'deleted_at' => null,
            ],
            [
                'username'  => 'tian',
                'email'  =>  "tian@gmail.com",
                'password'  =>  password_hash("123456", PASSWORD_DEFAULT),
                'address' => 'Malang',
                'role'  => 'customer',
                'deleted_at' => null,
            ],
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
