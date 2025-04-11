<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'  => 'Administrator',
                'email'  =>  "admin@gmail.com",
                'password'  =>  password_hash("admin", PASSWORD_DEFAULT),
                'deleted_at' => null,
            ],
        ];
        $this->db->table('admins')->insertBatch($data);

        // Terminals
        $terminals = [
            ['name' => 'Terminal Kampung Rambutan', 'location' => 'Jakarta'],
            ['name' => 'Terminal Pulo Gebang', 'location' => 'Jakarta'],
            ['name' => 'Terminal Leuwi Panjang', 'location' => 'Bandung'],
            ['name' => 'Terminal Giwangan', 'location' => 'Yogyakarta'],
            ['name' => 'Terminal Bungurasih', 'location' => 'Surabaya'],
            ['name' => 'Terminal Arjosari', 'location' => 'Malang'],
            ['name' => 'Terminal Amplas', 'location' => 'Medan'],
            ['name' => 'Terminal Ubung', 'location' => 'Denpasar'],
        ];
        $this->db->table('terminals')->insertBatch($terminals);

        // Destinations
        $destinations = [
            ['origin_terminal_id' => 1, 'destination_terminal_id' => 2, 'estimated_time' => '14 jam'],
            ['origin_terminal_id' => 1, 'destination_terminal_id' => 3, 'estimated_time' => '13 jam'],
            ['origin_terminal_id' => 1, 'destination_terminal_id' => 4, 'estimated_time' => '12 jam'],
            ['origin_terminal_id' => 1, 'destination_terminal_id' => 5, 'estimated_time' => '9 jam'],
            ['origin_terminal_id' => 1, 'destination_terminal_id' => 6, 'estimated_time' => '8 jam'],
        ];
        $this->db->table('destinations')->insertBatch($destinations);

        // Buses
        $buses = [
            ['bus_name' => 'PD Lailasari (Persero) Tbk', 'bus_type' => 'Ekonomi', 'plate_number' => 'B 6460 XX'],
            ['bus_name' => 'PD Suryono Sinaga', 'bus_type' => 'Bisnis', 'plate_number' => 'D 5574 YY'],
            ['bus_name' => 'UD Susanti Tbk', 'bus_type' => 'Eksekutif', 'plate_number' => 'L 8322 ZZ'],
        ];
        $this->db->table('buses')->insertBatch($buses);

        // Promos
        $promos = [
            ['code' => 'PROMOVigM', 'description' => 'Diskon 15%', 'discount_percent' => 15, 'valid_from' => '2025-04-11', 'valid_until' => '2025-05-11'],
            ['code' => 'PROMOLVKF', 'description' => 'Diskon 10%', 'discount_percent' => 10, 'valid_from' => '2025-04-11', 'valid_until' => '2025-05-11'],
            ['code' => 'PROMOSoiw', 'description' => 'Diskon 5%', 'discount_percent' => 5, 'valid_from' => '2025-04-11', 'valid_until' => '2025-05-11'],
        ];
        $this->db->table('promos')->insertBatch($promos);

        // Schedules
        $schedules = [
            ['bus_id' => 2, 'destination_id' => 4, 'departure_date' => '2025-05-09', 'departure_time' => '09:00:00', 'price' => 153045, 'class' => 'Eksekutif', 'available_seats' => 15],
            ['bus_id' => 3, 'destination_id' => 4, 'departure_date' => '2025-04-19', 'departure_time' => '16:00:00', 'price' => 194419, 'class' => 'Eksekutif', 'available_seats' => 23],
            ['bus_id' => 3, 'destination_id' => 4, 'departure_date' => '2025-05-11', 'departure_time' => '12:00:00', 'price' => 235862, 'class' => 'Eksekutif', 'available_seats' => 38],
            ['bus_id' => 1, 'destination_id' => 3, 'departure_date' => '2025-05-02', 'departure_time' => '06:00:00', 'price' => 102816, 'class' => 'Eksekutif', 'available_seats' => 18],
            ['bus_id' => 1, 'destination_id' => 5, 'departure_date' => '2025-05-10', 'departure_time' => '17:00:00', 'price' => 107062, 'class' => 'Bisnis', 'available_seats' => 20],
        ];
        $this->db->table('schedules')->insertBatch($schedules);
    }
}
