<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'brand_name'  => 'Nike',
                'deleted_at' => null,
            ],
            [
                'brand_name'  => 'Adidas',
                'deleted_at' => null,
            ],
            [
                'brand_name'  => 'Puma',
                'deleted_at' => null,
            ],
            [
                'brand_name'  => 'Reebok',
                'deleted_at' => null,
            ],
            [
                'brand_name'  => 'New Balance',
                'deleted_at' => null,
            ],
            [
                'brand_name'  => 'Asics',
                'deleted_at' => null,
            ],
            [
                'brand_name'  => 'Converse',
                'deleted_at' => null,
            ],
            [
                'brand_name'  => 'Vans',
                'deleted_at' => null,
            ],
            [
                'brand_name'  => 'Under Armour',
                'deleted_at' => null,
            ],
            [
                'brand_name'  => 'Fila',
                'deleted_at' => null,
            ],
        ];
        $this->db->table('brands')->insertBatch($data);
    }
}
