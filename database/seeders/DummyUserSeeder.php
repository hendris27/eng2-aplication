<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Hendri',
                'nik' => '1234567892',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Budi Santoso',
                'nik' => '1000000001',
                'password' => bcrypt('password12345678'),
            ],
            [
                'name' => 'Siti Aminah',
                'nik' => '1000000002',
                'password' => bcrypt('password12345678'),
            ],
            [
                'name' => 'Agus Salim',
                'nik' => '1000000003',
                'password' => bcrypt('password12345678'),
            ],
            [
                'name' => 'Dewi Lestari',
                'nik' => '1000000004',
                'password' => bcrypt('password12345678'),
            ],
            [
                'name' => 'Rina Kurniawan',
                'nik' => '1000000005',
                'password' => bcrypt('password12345678'),
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(['nik' => $user['nik']], $user);
        }
    }
}
