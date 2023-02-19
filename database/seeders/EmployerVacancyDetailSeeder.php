<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EmployerVacancyDetail;

class EmployerVacancyDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployerVacancyDetail::create([
            "position_title" => "Citation Builder",
            "job_description" => "Part-time",
            "nature_of_work" => "Part-time",
            "place_of_work" => "valencia city",
            "salary" => "2000+",
            "vacancy_count" => "5 vacancts",
            "employer_id" => 1
        ]);
    }
}
