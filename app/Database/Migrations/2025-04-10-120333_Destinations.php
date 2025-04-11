<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Destinations extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'origin_terminal_id' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'destination_terminal_id' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'distance_km'   => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'null'       => true,
            ],
            'estimated_time' => [
                'type'       => 'TIME',
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
        $this->forge->addForeignKey('origin_terminal_id', 'terminals', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('destination_terminal_id', 'terminals', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('destinations');
    }

    public function down()
    {
        $this->forge->dropTable('destinations');
    }
}
