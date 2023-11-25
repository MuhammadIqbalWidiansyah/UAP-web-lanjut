<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelKeranjang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'keranjang_id' => [
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
        $this->forge->addKey('keranjang_id', true, true);
        $this->forge->addForeignKey('user_id', 'user', 'user_id');
        $this->forge->addForeignKey('produk_id', 'produk', 'produk_id');
        $this->forge->createTable('keranjang');
    }

    public function down()
    {
        $this->forge->dropTable('keranjang');
    }
}
