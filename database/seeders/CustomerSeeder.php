<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            'Mitsuba',
            'Toyodenso',
            'Hino',
            'Koito',
            'Kawai',
            'AVI',
            'Kojima',
            'AJI',
            'Green Way',
            'MAS-I',
            'Ichikoh',
        ];

        foreach ($customers as $customer) {
            Customer::create(['name' => $customer]);
        }
    }
}