<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SizeSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'size_name'  => 'EU 37',
                'deleted_at' => null,
            ],
            [
                'size_name'  => 'EU 38',
                'deleted_at' => null,
            ],
            [
                'size_name'  => 'EU 39',
                'deleted_at' => null,
            ],
            [
                'size_name'  => 'EU 40',
                'deleted_at' => null,
            ],
            [
                'size_name'  => 'EU 41',
                'deleted_at' => null,
            ],
            [
                'size_name'  => 'EU 42',
                'deleted_at' => null,
            ],
            [
                'size_name'  => 'EU 43',
                'deleted_at' => null,
            ],
            [
                'size_name'  => 'EU 44',
                'deleted_at' => null,
            ],
            [
                'size_name'  => 'EU 45',
                'deleted_at' => null,
            ],
        ];
        $this->db->table('sizes')->insertBatch($data);
    }
}
