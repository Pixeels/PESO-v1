<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employer;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employer::create([
            "establishment_name" => 'Brightlocal',
            "establishment_accronym" => 'BL',
            "TIN_number" => '3804-3423',
            "employer_type" => 'Recruitment & Placement Agency',
            "total_work_force" => 'Medium (100-199) ',
            "e_signature" => 'brightlocal_esignature.png',
            "is_authorization_accepted" => 1
        ]);
    }
}
