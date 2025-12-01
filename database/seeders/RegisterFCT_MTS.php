<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RegisterFCT_MTS extends Seeder
{
    public function run(): void
    {
        $registrations = [
            ['22-Jul-16','FCT-MT-001-0','WETECH','FLASHER RELAY FR36-001'], 
            ['22-Jul-16','FCT-MT-002-0','WETECH','WINKER LAMP VC26-002A & 002C VC26-005 & 006'],
            ['12-Apr-17','FCT-MT-003-0','WETECH','WINKER LAMP VC26-004'],
            ['16-Jun-17','FCT-MT-004-0','WETECH','MITSUBA FLASHER FR36-002'],
            ['27-Nov-17','FCT-MT-005-0','WETECH','MITSUBA FLASHER FR36-003'],
            ['15-Nov-17','FCT-MT-006-0','WETECH','WINKER LAMP VC26-002A & 002C MODIF'],
            ['21-Nov-17','FCT-MT-007-0','WETECH','WINKER LAMP VC26-005 & 006 MODIF'],
            ['22-Feb-18','FCT-MT-008-0','WETECH','MITSUBA FLASHER FR36-004'],
            ['14-Mar-18','FCT-MT-009-0','WETECH','MITSUBA WINKER VC26-007'],
            ['19-Jul-18','FCT-MT-010-0','FINETEC','SG03-025 Sensor IC Checker (ASG SENSOR)'],
            ['19-Jul-18','FCT-MT-011-0','GEMAPRO','WINKER LAMP (VC26-001)'],
            ['19-Jul-18','FCT-MT-012-0','GEMAPRO','FLASHER RELAY FR33-029'],
            ['19-Jul-18','FCT-MT-013-0','GEMAPRO','WINKER LAMP VC27-001'],
            ['30-Oct-18','FCT-MT-014-0','WETECH','FLASHER RELAY (FR36-005)'],
            ['06-Feb-19','FCT-MT-015-0','FINETEC','SG03A-68 Sensor IC C.01 (MINA MISIL)'],
            ['11-Mar-19','FCT-MT-016-0','WETECH','VC27B-001'],
            ['26-Mar-19','FCT-MT-017-0','WETECH','FR36-006'],
            ['26-Mar-19','FCT-MT-018-0','WETECH','FR36-007'],
            ['20-Jun-19','FCT-MT-019-0','FINETEC','SG03A-68 Sensor IC C.02 (MINA MISIL)'],
            ['16-Jul-19','FCT-MT-020-0','FINETEC','VC26H-001'],
            ['21-Aug-19','FCT-MT-021-0','WETECH','VC26I-001A'],
            ['21-Aug-19','FCT-MT-022-0','WETECH','VC26J-001C'],
            ['17-Sep-19','FCT-MT-023-0','FINETEC','SG03A-68 Sensor IC C.03 (MINA MISIL)'],
            ['17-Sep-19','FCT-MT-024-0','FINETEC','SG03A-68 Sensor IC C.04 (MINA MISIL)'],
            ['17-Sep-19','FCT-MT-025-0','FINETEC','SG03A-68 Sensor IC C.05 (MINA MISIL)'],
            ['02-Dec-19','FCT-MT-026-0','WETECH','WINKER LAMP VC26-002A & 002C'],
            ['16-Dec-19','FCT-MT-027-0','FINETEC','SG03A-68 Sensor IC C.06 (MINA MISIL)'],
            ['28-Feb-20','FCT-MT-028-0','WETECH','WINKER LAMP VC26-007 (4 cavity)'],
            ['17-Jul-20','FCT-MT-029-0','WETECH','WINKER LAMP VC26N-001A'],
            ['17-Jul-20','FCT-MT-030-0','WETECH','WINKER LAMP VC26O-001A'],
            ['10-Nov-20','FCT-MT-031-0','WETECH','VC26P-001A'],
            ['31-Aug-22','FCT-MT-032-0','WETECH','VC26-002A'],
            ['31-Aug-22','FCT-MT-033-0','WETECH','VC26-002C'],
            ['31-Aug-22','FCT-MT-034-0','WETECH','VC26-005'],
            ['31-Aug-22','FCT-MT-035-0','WETECH','VC26-006'],
            ['31-Aug-22','FCT-MT-036-0','WETECH','VC26-004'],
            ['31-Aug-22','FCT-MT-037-0','WETECH','VC26N-001A'],
            ['31-Aug-22','FCT-MT-038-0','WETECH','FR36-008'],
            ['25-May-23','FCT-MT-039-0','WETECH','WINKER LAMP VC26-007 (8 Cavity)'],
            ['16-Jan-24','FCT-MT-040-0','WETECH','FR36-002 (8 CAV)'],
            ['06-Oct-23','FCT-MT-041-0','FINETEC','EV MOTOR SENSOR ASSY MA01B-001'],
            ['29-May-24','FCT-MT-042-0','WETECH','FR36-010/FR36-011 (A3198/A9115) NO.1'],
            ['26-Aug-24','FCT-MT-043-0','WETECH','FR36-010/FR36-011 (A3198/A9115) NO.2'],
            ['26-Aug-24','FCT-MT-044-0','FINETEC','SG03A-68 Sensor IC C.07 (MINA MISIL)'],
        ];

        foreach ($registrations as $item) {
            DB::table('register_f_c_t_s')->insert([
                'date_registration' => Carbon::parse($item[0])->toDateString(),
                'registration_no'   => $item[1],
                'fabrication_by'    => $item[2],
                'product_model'     => $item[3],
                'customer_by'       => 'MITSUBA',
                'status_fct'        => 'registered',
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
        }
    }
}
