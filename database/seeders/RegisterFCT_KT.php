<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RegisterFCT_KT extends Seeder
{
    public function run(): void
    {
        $registrations = [
            ['FCT-KT-001-0', '28-Oct-14', 'K56A'],
            ['FCT-KT-002-0', '17-Sep-14', 'K53A'],
            ['FCT-KT-003-0', '23-Jan-15', 'K15G'],
            ['FCT-KT-004-0', '05-Jun-15', 'X-43 LED HL'],
            ['FCT-KT-005-0', '04-Aug-15', '01A RCL'],
            ['FCT-KT-006-0', '04-Aug-15', '01A LED HL'],
            ['FCT-KT-007-0', '16-Sep-16', 'D21N'],
            ['FCT-KT-008-0', '16-Sep-16', '03F'],
            ['FCT-KT-009-0', '17-Nov-16', '04F'],
            ['FCT-KT-010-0', '17-Nov-16', 'X53 LED HL'],
            ['FCT-KT-011-0', '23-Oct-17', 'BS7 (07W)'],
            ['FCT-KT-012-0', '09-Nov-17', 'K59J NO.1'],
            ['FCT-KT-013-0', '12-Feb-18', 'K59J NO.2'],
            ['FCT-KT-014-0', '15-May-18', 'B6H NO.1'],
            ['FCT-KT-015-0', '13-Sep-18', 'D12L'],
            ['FCT-KT-016-0', '09-Apr-18', 'K59J NO.3'],
            ['FCT-KT-017-0', '30-Nov-18', 'B6H NO.2'],
            ['FCT-KT-018-0', '30-Nov-18', 'B6H NO.3'],
            ['FCT-KT-019-0', '30-Nov-18', 'B6H NO.4'],
            ['FCT-KT-020-0', '09-Jan-19', 'B5X LED HL'],
            ['FCT-KT-021-0', '29-Jan-19', 'YHA LDM'],
            ['FCT-KT-022-0', '19-Mar-19', 'D79L'],
            ['FCT-KT-023-0', '29-Apr-19', '655B LDM'],
            ['FCT-KT-024-0', '15-Aug-19', 'K64J TAIL LAMP'],
            ['FCT-KT-025-0', '22-Oct-19', 'Y230 LED'],
            ['FCT-KT-026-0', '28-Dec-20', 'D26A-H'],
            ['FCT-KT-027-0', '28-Dec-20', 'D26A-B'],
            ['FCT-KT-028-0', '04-Jan-21', '3MOA RCL A'],
            ['FCT-KT-029-0', '04-Jan-21', '3MOA RCL B+C'],
            ['FCT-KT-030-0', '04-Jan-21', '3MOA RCL D'],
            ['FCT-KT-031-0', '05-Feb-22', 'BKA PCB B,C,D'],
            ['FCT-KT-032-0', '05-Feb-22', 'BKA PCB A,E,F'],
            ['FCT-KT-033-0', '13-Jun-22', 'TG4D CHL PCB A-D LH/RH'],
            ['FCT-KT-034-0', '13-Jun-22', 'TG4D LED HL PCB B LH/RH'],
            ['FCT-KT-035-0', '13-Jun-22', 'TG4D LED HL PCB C LH/RH'],
            ['FCT-KT-036-0', '13-Jun-22', 'TG4D LED HL LDM'],
            ['FCT-KT-037-0', '13-Jun-22', 'TG4D DRL/CLL LDM'],
            ['FCT-KT-038-0', '10-Aug-22', 'D74A-T HL B'],
            ['FCT-KT-039-0', '10-Aug-22', 'D74A-D HL B'],
            ['FCT-KT-040-0', '26-Aug-22', 'D74A-D HL A'],
            ['FCT-KT-041-0', '21-Nov-22', 'BLS LDM + PCB D-E NO.1'],
            ['FCT-KT-042-0', '26-Jan-23', '5H45'],
            ['FCT-KT-043-0', '11-Aug-23', 'BLS LDM + PCB D-E NO.2'],
            ['FCT-KT-044-0', '11-Aug-23', 'BLS LDM + PCB D-E NO.3'],
            ['FCT-KT-045-0', '28-Aug-23', 'BLS LDM + PCB D-E NO.4'],
            ['FCT-KT-046-0', '15-May-24', 'K3NA PRINT BASE ASSY A'],
            ['FCT-KT-047-0', '15-May-24', 'K3NA PRINT BASE ASSY B'],
            ['FCT-KT-048-0', '15-May-24', 'K3NA PRINT BASE ASSY C'],
            ['FCT-KT-049-0', '27-May-25', 'BYW PBA D-E NO.1'],
            ['FCT-KT-050-0', '27-May-25', 'BYW PBA D-E NO.2'],
        ];

        foreach ($registrations as $item) {
            DB::table('register_f_c_t_s')->insert([
                'registration_no'   => $item[0],
                'date_registration' => Carbon::parse($item[1])->toDateString(),
                'customer_by'       => 'KOITO',
                'fabrication_by'    => 'FINETEC',
                'product_model'     => $item[2],
                'status_fct'        => 'registered',
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
        }
    }
}
