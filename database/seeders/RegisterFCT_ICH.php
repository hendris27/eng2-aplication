<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RegisterFCT_ICH extends Seeder
{
    public function run(): void
    {
        $registrations = [
            ['7-Mar-17','FCT-IC-001-0','FINETEC','2N0 INSPECTION TESTER'],
            ['7-Mar-17','FCT-IC-002-0','FINETEC','2N0 P/L LED C1-C2'],
            ['7-Mar-17','FCT-IC-003-0','FINETEC','2N0 DTRL & PLLED B1-B2'],
            ['6-Apr-17','FCT-IC-004-0','GEMAPRO','P37 RCLD'],
            ['8-Feb-17','FCT-IC-005-0','GEMAPRO','P37 RCLT & CLL'],
            ['18-Oct-16','FCT-IC-006-0','WETECH','2T7 RCLT & CLL'],
            ['23-Aug-17','FCT-IC-007-0','WETECH','6E8 RCLT'],
            ['28-Aug-17','FCT-IC-008-0','GEMAPRO','6E8 RCLD'],
            ['28-Aug-17','FCT-IC-009-0','GEMAPRO','6E8 HL'],
            ['22-May-18','FCT-IC-010-0','WETECH','6F9RCLT'],
            ['22-May-18','FCT-IC-011-0','WETECH','6F9RCLD'],
            ['27-Jul-18','FCT-IC-012-0','FINETEC','P52 FCL'],
            ['27-Jul-18','FCT-IC-013-0','FINETEC','P52 RCLD'],
            ['27-Jul-18','FCT-IC-014-0','FINETEC','P52 RCLT'],
            ['20-Sep-18','FCT-IC-015-0','WETECH','6F9 HL'],
            ['28-Aug-19','FCT-IC-016-0','WETECH','6E8 HL'],
            ['28-Aug-19','FCT-IC-017-0','WETECH','6E8 RCLD'],
            ['28-Aug-19','FCT-IC-018-0','WETECH','P37 RCLT'],
            ['05-May-20','FCT-IC-019-0','FINETEC','6G7 RCLT'],
            ['05-May-20','FCT-IC-020-0','FINETEC','6G7 RCLD'],
            ['04-Jun-20','FCT-IC-021-0','FINETEC','XF2 RCLT'],
            ['04-Jun-20','FCT-IC-022-0','FINETEC','XF2 RCLD'],
            ['11-Jan-21','FCT-IC-023-0','WETECH','6G7 HL LED ASSY A LH/RH'],
            ['11-Jan-21','FCT-IC-024-0','WETECH','6G7 HL PCB C+B'],
            ['11-Jan-21','FCT-IC-025-0','WETECH','6G7 HL PCB D'],
            ['10-Feb-22','FCT-IC-026-0','FINETEC','EL1 RCLD OPT TAIL'],
            ['10-Feb-22','FCT-IC-027-0','FINETEC','EL1 HMSL'],
            ['10-Feb-22','FCT-IC-028-0','FINETEC','EL1 RCLT STD TAIL'],
            ['10-Feb-22','FCT-IC-029-0','FINETEC','EL1 RCLT TAIL STOP (RH)'],
            ['10-Feb-22','FCT-IC-030-0','FINETEC','EL1 RCLT TAIL STOP (LH)'],
            ['18-Mar-22','FCT-IC-031-0','FINETEC','9B2/922B RCLT RH'],
            ['18-Mar-22','FCT-IC-032-0','FINETEC','9B2/922B RCLT LH'],
            ['18-Mar-22','FCT-IC-033-0','FINETEC','9B2/922B RCLD RH'],
            ['18-Mar-22','FCT-IC-034-0','FINETEC','9B2/922B RCLD LH'],
            ['02-Jul-21','FCT-IC-035-0','FINETEC','P59 RCLT LH'],
            ['02-Jul-21','FCT-IC-036-0','FINETEC','P59 RCLT RH'],
            ['02-Jul-21','FCT-IC-037-0','FINETEC','P59 RCLD LH'],
            ['02-Jul-21','FCT-IC-038-0','FINETEC','P59 RCLD RH'],
            ['28-Jul-21','FCT-IC-039-0','FINETEC','P59 FCL D1-D2 RH'],
            ['28-Jul-21','FCT-IC-040-0','FINETEC','P59 FCL D1-D2 LH'],
            ['04-Aug-21','FCT-IC-041-0','FINETEC','P59 FCL A1-A2 RH'],
            ['04-Aug-21','FCT-IC-042-0','FINETEC','P59 FCL A1-A2 LH'],
            ['04-Aug-21','FCT-IC-043-0','FINETEC','P59 FCL B1-B2 RH'],
            ['04-Aug-21','FCT-IC-044-0','FINETEC','P59 FCL B1-B2 LH'],
            ['04-Aug-21','FCT-IC-045-0','FINETEC','P59 FCL B-B3 LHRH'],
            ['05-Jan-21','FCT-IC-046-0','FINETEC','EL9 RCLD LH/RH'],
            ['05-Jan-21','FCT-IC-047-0','FINETEC','EL9 RCLT LH'],
            ['05-Jan-21','FCT-IC-048-0','FINETEC','EL9 RCLT RH'],
            ['09-Feb-21','FCT-IC-049-0','FINETEC','9B8 HL HB/LB'],
            ['09-Feb-21','FCT-IC-050-0','FINETEC','9B8 RCLT LH'],
            ['09-Feb-21','FCT-IC-051-0','FINETEC','9B8 RCLT RH'],
            ['09-Feb-21','FCT-IC-052-0','FINETEC','9B8 RCLD LH/RH'],
            ['26-Mar-22','FCT-IC-053-0','FINETEC','EL9 CTR PL CIR + CTRL PL LED SUB ASSY LH/RH'],
            ['26-Mar-22','FCT-IC-054-0','FINETEC','EL9 DRL/PL CIR + DRL LED ASSY LH/RH'],
            ['26-Mar-22','FCT-IC-055-0','FINETEC','9B8 LED CIR'],
            ['08-Aug-22','FCT-IC-056-0','FINETEC','6J0 HL PCB A'],
            ['07-Sep-22','FCT-IC-057-0','FINETEC','9D5 RCLD LH'],
            ['07-Sep-22','FCT-IC-058-0','FINETEC','9D5 RCLD RH'],
            ['07-Sep-22','FCT-IC-059-0','FINETEC','9D5 RCLT LH'],
            ['07-Sep-22','FCT-IC-060-0','FINETEC','9D5 RCLT RH'],
            ['14-Mar-24','FCT-IC-061-0','FINETEC','P63 RCLT LED ASSY A+B+C+D LH'],
            ['18-Mar-24','FCT-IC-062-0','FINETEC','P63 RCLT LED ASSY A+B+C+D RH'],
            ['18-Mar-24','FCT-IC-063-0','FINETEC','P63 RCLT LED E+F & CIRCUIT A LH'],
            ['18-Mar-24','FCT-IC-064-0','FINETEC','P63 RCLT LED E+F & CIRCUIT A RH'],
            ['14-Mar-24','FCT-IC-065-0','FINETEC','P63 RCLD CIRCUIT B+D & LED ASSY A LH'],
            ['18-Mar-24','FCT-IC-066-0','FINETEC','P63 RCLD CIRCUIT B+D & LED ASSY A RH'],
            ['20-Mar-24','FCT-IC-067-0','FINETEC','P63 RCLD LED ASSY C+D (RFOG) (WITHOUT RFOG) LH RH'],
        ];


        foreach ($registrations as $item) {
            DB::table('register_f_c_t_s')->insert([
                'registration_no'   => $item[01],
                'date_registration' => Carbon::parse($item[0])->toDateString(),
                'product_model'     => $item[3],
                'fabrication_by'    => $item[2],  
                'customer_by'       => 'ICHIKOH',
                'status_fct'        => 'registered',
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
        }
    }
}
