<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProblemFCT;
use App\Models\RegisterFCT;

class ProblemFCTSeeder extends Seeder
{
    public function run(): void
    {
        $registerFct = RegisterFCT::first();
        if (!$registerFct) return;

        ProblemFCT::create([
            'register_fct_id' => $registerFct->id,
            'model_produk' => $registerFct->product_model,
            'machine_no' => $registerFct->registration_no,
            'date' => now()->toDateString(),
            'time' => now()->format('H:i:s'),
            'step' => 'Step 1','error' => 'Error contoh','action' => 'Action contoh','result' => 'OK','pic' => 'PIC Contoh',
        ]);
    }
}
