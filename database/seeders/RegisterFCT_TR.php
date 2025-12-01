<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RegisterFCT_TR extends Seeder
{
    public function run(): void
    {
        $registrations = [
            ['18-Aug-16','FCT-TR-001-0','WETECH','75H228/75H229'],
            ['10-Jan-18','FCT-TR-002-0','TOKARIKA','75K638'],
            ['17-Sep-18','FCT-TR-003-0','TOKARIKA','D12L (ROM HC)'],
            ['17-Sep-18','FCT-TR-004-0','TOKARIKA','D12L (FCT LED)'],
            ['06-Dec-18','FCT-TR-005-0','WETECH','D12L (LED ANALYZER)'],
            ['06-Apr-20','FCT-TR-006-0','WETECH','D24H'],
            ['12-Oct-20','FCT-TR-007-0','TOKARIKA','75P866/868 (FCT JIG)'],
            ['10-Feb-20','FCT-TR-009-0','GEMAPRO','75J081'],
            ['28-Jun-21','FCT-TR-010-0','WETECH','75P866'],
            ['27-Sep-21','FCT-TR-011-0','TOKARIKA','75R173/75R174/75R175'],
            ['17-Nov-22','FCT-TR-012-0','TOKARIKA','75R483/75R484'],
        ];

        foreach ($registrations as $item) {
            DB::table('register_f_c_t_s')->insert([
                'date_registration' => Carbon::parse($item[0])->toDateString(),
                'registration_no'   => $item[1],
                'fabrication_by'    => $item[2],
                'product_model'     => $item[3],
                'customer_by'       => 'TOKARIKA',
                'status_fct'        => 'registered',
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
        }
    }
}
