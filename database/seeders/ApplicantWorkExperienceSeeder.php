<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ApplicantWorkExperience;

class ApplicantWorkExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicantWorkExperience::create([
            'company_name' => 'Brightlocal',
            'address' => 'valencia city',
            'position' => 'citation builder',
            'inclusive_date' => '2022/05/31',
            'status' => 'probationary',
            'applicant_id' => 1
        ]);
    }
}
