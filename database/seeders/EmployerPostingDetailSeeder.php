<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EmployerPostingDetail;

class EmployerPostingDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployerPostingDetail::create([
            "posting_date" => '2022-02-04',
            "valid_until" => '2022-04-03',
            "employer_id" => 1
        ]);
    }
}
