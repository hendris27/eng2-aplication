<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StorageA;

class DummyStorageASeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 30; $i++) {
            StorageA::create([
                'no' => $i,
                'category' => 'FCT Machine',
                'model_name' => 'Model '.$i,
                'customer' => 'Customer '.$i,
                'location' => 'Rak 1 No. '.$i,
                'status' => 'Running',
                'remark' => '-',
                'pic' => 1, // ganti dengan id user yang valid jika perlu
                'shift' => 1,
            ]);
        }
    }
}
