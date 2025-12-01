<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            RoleSeeder::class,
            ChecksheetListSeeder::class,
            DummyUserSeeder::class,
            DummyStorageASeeder::class,
            IronSolderInspectionSeeder::class,
            CustomerSeeder::class,
            FixRegisterFCTCustomerBySeed2::class,
            RegisterFCT_KT::class,
            RegisterFCT_ICH::class,
            RegisterFCT_TR::class,
        ]);

        $user = User::updateOrCreate(
            ['nik' => '1234567890'],
            [
                'name' => 'Admin',
                'password' => bcrypt('password'),
            ]
        );
        $user->assignRole('admin');
    }
}
