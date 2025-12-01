<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class RegisterFCT_AVI extends Seeder

{
    public function run(): void
    {
        $registrations = [
            ['25-Apr-16','FCT-AV-001-0','GEMAPRO','VPFZRF-14B115-AB'],
            ['25-Apr-16','FCT-AV-002-0','GEMAPRO','VPFZRF-14B115-AB'],
        ];

        foreach ($registrations as $item) {
            DB::table('register_f_c_t_s')->insert([
                'date_registration' => Carbon::parse($item[0])->toDateString(),
                'registration_no'   => $item[1],
                'fabrication_by'    => $item[2],
                'product_model'     => $item[3],
                'customer_by'       => 'AVI',
                'status_fct'        => 'registered',
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
        }
    }
}


