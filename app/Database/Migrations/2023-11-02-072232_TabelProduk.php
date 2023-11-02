<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelProduk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'produk_id' => [
                'type'=> 'integer',
                'constraint' => '11',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama_produk' => [
                'type' => 'varchar',
                'constraint' => '255'
            ],
            'deskripsi' => [
                'type'=> 'varchar',
                'constraint' => '255'
            ],
            'harga' => [
                'type' => 'double',
                'constraint' => '9,0',
                'unsigned' => true
            ],
            'stok' => [
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
        $this->forge->addKey('produk_id', true, true);
        $this->forge->createTable('produk');
    }

    public function down()
    {
        $this->forge->dropTable('produk', true);
    }
}
