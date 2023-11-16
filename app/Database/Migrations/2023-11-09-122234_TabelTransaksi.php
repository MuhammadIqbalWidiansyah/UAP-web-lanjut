<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelTransaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'transaksi_id' => [
                'type' => 'integer',
                'constraint' => '11',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'user_id' => [
                'type'=> 'integer',
                'constraint' => '11',
                'unsigned' => true,
            ],
            'total_harga' => [
                'type' => 'double',
                'constraint' => '9,0',
                'unsigned' => true
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
        $this->forge->addKey('transaksi_id', true, true);
        $this->forge->addForeignKey('user_id', 'user', 'user_id');
        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi', true);
    }
}
