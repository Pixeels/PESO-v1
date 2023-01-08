<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ApplicantEducationalBackground;

class ApplicantEducationalBackgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicantEducationalBackground::create([
            'type' => 0,
            'school' => 'VCCS',
            'course' => 'N/A',
            'year_graduated' => 2011,
            'level' => 'completed',
            'year_last_attended' => 2011,
            'awards' => 'N/A',
            'applicant_id' => 1
        ]);

        ApplicantEducationalBackground::create([
            'type' => 1,
            'school' => 'VNHS',
            'course' => 'N/A',
            'year_graduated' => 2016,
            'level' => 'completed',
            'year_last_attended' => 2016,
            'awards' => 'N/A',
            'applicant_id' => 1
        ]);

        ApplicantEducationalBackground::create([
            'type' => 2,
            'school' => 'CMU SHS',
            'course' => 'STEM',
            'year_graduated' => 2018,
            'level' => 'completed',
            'year_last_attended' => 2018,
            'awards' => 'With Honors',
            'applicant_id' => 1
        ]);

        ApplicantEducationalBackground::create([
            'type' => 0,
            'school' => 'CMU',
            'course' => 'BSIT',
            'year_graduated' => 2022,
            'level' => 'completed',
            'year_last_attended' => 2022,
            'awards' => 'Cum Laude',
            'applicant_id' => 1
        ]);
    }
}
