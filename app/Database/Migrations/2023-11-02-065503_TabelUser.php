<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type'=> 'integer',
                'constraint' => '11',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'usernames' => [
                'type'=> 'varchar',
                'constraint' => '255'
            ],
            'password' => [
                'type'=> 'varchar',
                'constraint' => '255'
            ],
            'role' => [
                'type'=> 'varchar',
                'constraint' => '255'
            ],
            'email' => [
                'type'=> 'varchar',
                'constraint' => '255'
            ],
            'nama_lengkap' => [
                'type'=> 'varchar',
                'constraint' => '255'
            ],
            'alamat' => [
                'type'=> 'varchar',
                'constraint' => '255'
            ],
            'nomor_telepon' => [
                'type'=> 'varchar',
                'constraint' => '255'
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ]
        ]);
        $this->forge->addKey('user_id', true, true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user', true);
    }
}
