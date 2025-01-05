<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'category_name'  => 'all',
                'deleted_at' => null,
            ],
            [
                'category_name'  => 'top_selling',
                'deleted_at' => null,
            ],
            [
                'category_name'  => 'new_arrival',
                'deleted_at' => null,
            ],
        ];
        $this->db->table('categories')->insertBatch($data);
    }
}
