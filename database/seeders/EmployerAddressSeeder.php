<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EmployerAddress;

class EmployerAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployerAddress::create([
            "address" => '2nd floor unknown building',
            "barangay" => 'Poblacion',
            "city_or_municipality" => 'valencia city',
            "province" => 'bukidnon',
            "employer_id" => 1
        ]);
    }
}
