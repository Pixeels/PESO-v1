<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ApplicantStatus;

class ApplicantStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicantStatus::create([
            'applicant_type' => 0,
            'applicant_status_type' => 'Wage Employed',
            'applicant_id' => 1
        ]);
    }
}
