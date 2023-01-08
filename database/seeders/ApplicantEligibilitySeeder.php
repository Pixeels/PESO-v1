<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ApplicantEligibility;

class ApplicantEligibilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicantEligibility::create([
            'training_or_courses' => 'Computer Programming',
            'duration' => '6months',
            'instituition' => 'tesda',
            'certificates' => 'NCII',
            'applicant_id' => 1
        ]);

        ApplicantEligibility::create([
            'training_or_courses' => 'Computer System Servicing',
            'duration' => '6months',
            'instituition' => 'tesda',
            'certificates' => 'NCII',
            'applicant_id' => 1
        ]);
    }
}
