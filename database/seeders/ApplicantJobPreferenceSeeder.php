<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ApplicantJobPreference;


class ApplicantJobPreferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicantJobPreference::create([
            'applicant_id' => 1,
            'occupation' => 'web developer'
        ]);

        ApplicantJobPreference::create([
            'applicant_id' => 1,
            'occupation' => 'Graphic Designer'
        ]);

        ApplicantJobPreference::create([
            'applicant_id' => 1,
            'occupation' => 'Web Designer'
        ]);
    }
}
