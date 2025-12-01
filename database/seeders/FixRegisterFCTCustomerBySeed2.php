<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RegisterFCT;
use App\Models\Customer;

class FixRegisterFCTCustomerBySeed2 extends Seeder
{
    public function run()
    {
        $count = 0;
        foreach (RegisterFCT::all() as $reg) {
            if (!is_numeric($reg->customer_by)) {
                $id = Customer::where('name', $reg->customer_by)->value('id');
                if ($id) {
                    $reg->customer_by = $id;
                    $reg->save();
                    $count++;
                }
            }
        }
        echo "Updated $count records.\n";
    }
}