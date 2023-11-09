<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelKategoriProduk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kategori_id' => [
                'type'=> 'integer',
                'constraint' => '11',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama_kategori' => [
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
        $this->forge->addKey('kategori_id', true, true);
        $this->forge->createTable('kategori_produk');
    }

    public function down()
    {
        $this->forge->dropTable('kategori_produk');
    }
}
