<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelDetailTransaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'detail_transaksi_id' => [
                'type' => 'integer',
                'constraint' => '11',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'transaksi_id' => [
                'type' => 'integer',
                'constraint' => '11',
                'unsigned' => true,
            ],
            'produk_id' => [
                'type'=> 'integer',
                'constraint' => '11',
                'unsigned' => true,
            ],
            'jumlah_produk' => [
                'type' => 'integer',
                'constraint' => '6',
                'unsigned' => true
            ],
            'harga_produk' => [
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
        $this->forge->addKey('detail_transaksi_id', true, true);
        $this->forge->addForeignKey('transaksi_id', 'transaksi', 'transaksi_id');
        $this->forge->addForeignKey('produk_id', 'produk', 'produk_id');
        $this->forge->createTable('detail_transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('detail_transaksi');
    }
}
