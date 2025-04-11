<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Schedules extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'bus_id'         => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'destination_id' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'departure_date' => [
                'type' => 'DATE',
            ],
            'departure_time' => [
                'type' => 'TIME',
            ],
            'price'          => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'class'          => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'available_seats' => [
                'type' => 'INT',
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
        $this->forge->addForeignKey('bus_id', 'buses', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('destination_id', 'destinations', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('schedules');
    }

    public function down()
    {
        $this->forge->dropTable('schedules');
    }
}
