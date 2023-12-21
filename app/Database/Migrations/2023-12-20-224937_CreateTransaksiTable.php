<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransaksiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'transaksi_id' => [
                'type'=> 'integer',
                'constraint' => '11',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'after' => 'transaksi_id',
            ],
            'produk_id' => [
                'type' => 'integer',
                'constraint' => '11',
                'unsigned' => true
            ],
            'jumlah' => [
                'type' => 'integer',
                'constraint' => '6',
                'unsigned' => true
            ],
            'tanggal_transaksi' => [
                'type' => 'datetime',
                'null' => true
            ]
        ]);
        $this->forge->addKey('transaksi_id', true, true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('produk_id', 'produk', 'produk_id');
        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi', true);
    }
}
