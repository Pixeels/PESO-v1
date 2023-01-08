<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EmployerQualificationRequirement;

class EmployerQualificationRequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployerQualificationRequirement::create([
            "work_of_experience" => '12months',
            "sex" => 'male',
            "religion" => 'christian',
            "civil_status" => 'single',
            "is_accept_disability" => 'no',
            "disability_type" => 'N/A',
            "educational_level" => "college graduate",
            "course_or_major" => 'BSIT',
            "license" => "N/A",
            "eligibility" => "N/A",
            "certification" => "N/A",
            "language_or_dialect" => "English",
            "preferred_residence" => "valencia city",
            "accepts" => "PESO",
            "employer_id" => 1
        ]);
    }
}
