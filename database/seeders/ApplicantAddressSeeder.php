<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ApplicantAddress;

class ApplicantAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicantAddress::create([
            'address_type' => 0,
            'province' => 'bukidnon',
            'municipality_or_city' => 'valencia city',
            'barangay' => 'poblacion',
            'village' => 'juanilla village',
            'house_no_or_street' => 'N/A',
            'applicant_id' => 1
        ]);

        ApplicantAddress::create([
            'address_type' => 1,
            'province' => 'bukidnon',
            'municipality_or_city' => 'valencia city',
            'barangay' => 'poblacion',
            'village' => 'juanilla village',
            'house_no_or_street' => 'N/A',
            'applicant_id' => 1
        ]);
    }
}
