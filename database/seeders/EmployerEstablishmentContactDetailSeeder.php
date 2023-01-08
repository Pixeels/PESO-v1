<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EmployerEstablishmentContactDetail;

class EmployerEstablishmentContactDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployerEstablishmentContactDetail::create([
            "title" => "Miss",
            "surname" => "Jane",
            "firstname" => "Doe",
            "lastname" => "Bod",
            "suffix" => "N/A",
            "position" => "President",
            "telephone_number" => "N/A",
            "mobile_number" => "084354354",
            "fax_number" => "N/A",
            "email_address" => "janedoe@email.com",
            "employer_id" => 1
        ]);
    }
}
