<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriProdukSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_kategori' => 'Day Cream',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'nama_kategori' => 'Night Cream',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'nama_kategori' => 'Moistureizer',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'nama_kategori' => 'Serum',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'nama_kategori' => 'Toner',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'nama_kategori' => 'Booster',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'nama_kategori' => 'Sunscreen',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'nama_kategori' => 'Facial Wash',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
        ];

        $this->db->table('kategori_produk')->insertBatch($data);
    }
}
