<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_produk' => 'Scarlett Acne Cream',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam imperdiet.',
                'harga' => 89500,
                'stok' => 150,
                'kategori_produk' => 1,
                'foto' => 'images/daycream.png',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'nama_produk' => 'Scarlett Brightly Ever After Cream',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam imperdiet.',
                'harga' => 151500,
                'stok' => 250,
                'kategori_produk' => 2,
                'foto' => 'images/nightcream.png',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'nama_produk' => 'Skintific Barrier Repair Moisturize Gel',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam imperdiet.',
                'harga' => 40000,
                'stok' => 210,
                'kategori_produk' => 3,
                'foto' => 'images/moistureizer.png',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'nama_produk' => 'Herbivore Bakuchiol',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam imperdiet.',
                'harga' => 175000,
                'stok' => 136,
                'kategori_produk' => 4,
                'foto' => 'images/serum.png',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'nama_produk' => 'Skintific Soothing Toner',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam imperdiet.',
                'harga' => 63500,
                'stok' => 320,
                'kategori_produk' => 5,
                'foto' => 'images/toner.png',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'nama_produk' => 'Biomecera Advanced Booster Serum',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam imperdiet.',
                'harga' => 249000,
                'stok' => 210,
                'kategori_produk' => 6,
                'foto' => 'images/serum.png',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'nama_produk' => 'Wardah Essential Sunscreen Gel',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam imperdiet.',
                'harga' => 79000,
                'stok' => 160,
                'kategori_produk' => 7,
                'foto' => 'images/sunscreen.png',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'nama_produk' => 'Cosrx Low pH Good Morning Gel Cleanser',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam imperdiet.',
                'harga' => 65000,
                'stok' => 70,
                'kategori_produk' => 8,
                'foto' => 'images/facialwash.png',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
        ];

        $this->db->table('produk')->insertBatch($data);
    }
}
