<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Applicant;

class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Applicant::create([
            'surname' => 'Doe',
            'firstname' => 'John',
            'middlename' => "Bob",
            'suffix' => 'N/A',
            'birthdate' => '2000/04/02',
            'civil_status' => 'single',
            'height' => '170cm',
            'religion' => 'N/A',
            'sex' => 'Male',
            'email_address' => 'johndoe@email.com',
            'landline_number' => 'N/A',
            'phone_number' => '093234454',
            'disability' => 'N/A',
            'TIN_number' => '2890343',
            'GSIS_SSS_id' => '23894543',
            'pag_ibig_number' => '23894543',
            'philhealth_id' => '489345654',
            'is_actively_looking_for_work' => 1,
            'is_willing_to_work_immidiately' => 1,
            'find_job_duration' => '3months',
            'when_to_start_working' => '2023/01/30',
            'is_4Ps' => 1,
            'household_id_4ps' => '3489-23489',
            'expected_salary' => 20000,
            'passport_number' => '38023-3234',
            'expiry_date' => '2025/02/22',
            'skills_without_formal_training' => 'carpentry',
            'e_signature' => 'johndoe_signature.png',
            'is_authorization_accepted' => 1
        ]);
    }
}
