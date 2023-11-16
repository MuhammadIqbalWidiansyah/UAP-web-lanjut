<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'transaksi_id' => 1,
                'user_id' => 1,
                'total_harga' => 50000,
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'transaksi_id' => 2,
                'user_id' => 2,
                'total_harga' => 75000,
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
        ];

        // Insert data ke dalam tabel "transaksi"
        $this->db->table('transaksi')->insertBatch($data);
    }
}
