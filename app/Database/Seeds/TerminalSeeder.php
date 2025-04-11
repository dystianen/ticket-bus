<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TerminalSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Terminal Kampung Rambutan', 'location' => 'Jakarta'],
            ['name' => 'Terminal Pulo Gebang', 'location' => 'Jakarta'],
            ['name' => 'Terminal Leuwi Panjang', 'location' => 'Bandung'],
            ['name' => 'Terminal Giwangan', 'location' => 'Yogyakarta'],
            ['name' => 'Terminal Bungurasih', 'location' => 'Surabaya'],
            ['name' => 'Terminal Arjosari', 'location' => 'Malang'],
            ['name' => 'Terminal Amplas', 'location' => 'Medan'],
            ['name' => 'Terminal Ubung', 'location' => 'Denpasar'],
        ];

        // Insert batch
        $this->db->table('terminals')->insertBatch($data);
    }
}
