<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'nama'     => 'Administrator',
                'email'    => 'admin@gmail.com',
                'role'     => 'admin',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
            ],
            [
                'username' => 'user',
                'nama'     => 'User',
                'email'    => 'user@gmail.com',
                'role'     => 'user',
                'password' => password_hash('user123', PASSWORD_DEFAULT),
            ],
        ];

        // Using the Query Builder to insert data
        $this->db->table('users')->insertBatch($data);
    }
}
