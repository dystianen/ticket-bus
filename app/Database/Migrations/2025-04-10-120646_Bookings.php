<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bookings extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_name'      => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'user_email'     => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'schedule_id'    => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'promo_id'       => [
                'type'     => 'INT',
                'unsigned' => true,
                'null'     => true,
            ],
            'total_passengers' => [
                'type' => 'INT',
            ],
            'total_price'    => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'status'         => [
                'type'       => 'ENUM',
                'constraint' => ['waiting', 'approved', 'rejected'],
                'default'    => 'waiting',
            ],
            'proof_of_payment' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'created_at'     => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at'     => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('schedule_id', 'schedules', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('promo_id', 'promos', 'id', 'SET NULL', 'CASCADE');
        $this->forge->createTable('bookings');
    }

    public function down()
    {
        $this->forge->dropTable('bookings');
    }
}
