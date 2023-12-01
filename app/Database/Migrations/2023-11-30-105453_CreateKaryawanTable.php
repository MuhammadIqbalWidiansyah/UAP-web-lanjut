<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKaryawanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'jabatan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'gaji' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'created_at'        => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'updated_at'        => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'deleted_at'        => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('karyawan');
    }

    public function down()
    {
        $this->forge->dropTable('karyawan');
    }
}
