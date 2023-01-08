<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ApplicantJobPreferenceLocation;

class ApplicantJobPreferenceLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicantJobPreferenceLocation::create([
            'type' => 0,
            'location' => 'Valencia City',
            'applicant_id' => 1
        ]);

        ApplicantJobPreferenceLocation::create([
            'type' => 0,
            'location' => 'Cagayan De Oro City',
            'applicant_id' => 1
        ]);

        ApplicantJobPreferenceLocation::create([
            'type' => 0,
            'location' => 'Davao City',
            'applicant_id' => 1
        ]);
    }
}
