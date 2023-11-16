<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'usernames' => 'john_doe',
                'password' => password_hash('password123', PASSWORD_DEFAULT),
                'role' => 'user',
                'email' => 'john@example.com',
                'nama_lengkap' => 'John Doe',
                'alamat' => '123 Main Street',
                'nomor_telepon' => '123456789',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'usernames' => 'jane_smith',
                'password' => password_hash('password456', PASSWORD_DEFAULT),
                'role' => 'user',
                'email' => 'jane@example.com',
                'nama_lengkap' => 'Jane Smith',
                'alamat' => '456 Elm Street',
                'nomor_telepon' => '987654321',
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
            ],
            // Tambahkan data user lainnya sesuai kebutuhan
        ];

        // Insert data ke dalam tabel "user"
        $this->db->table('user')->insertBatch($data);
    }
}
