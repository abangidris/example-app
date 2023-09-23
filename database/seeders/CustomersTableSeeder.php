<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => 'Glade Air Freshener 225ML',
            'gender' => 'Pewangi Ruangan - Glade Air Freshener 225ML',
            'email' => 'Pewangi Ruangan - Glade Air Freshener 225ML',
            'phone' => 'Pewangi Ruangan - Glade Air Freshener 225ML',
        ]);
        Customer::create([
            'name' => 'Aqua 330 ML',
            'gender' => 'Air Mineral - Aqua 330 ML',
            'email' => 'Pewangi Ruangan - Glade Air Freshener 225ML',
            'phone' => 'Pewangi Ruangan - Glade Air Freshener 225ML',
        ]);
    }
    
}
