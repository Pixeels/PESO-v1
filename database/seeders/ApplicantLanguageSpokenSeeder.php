<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ApplicantLanguageSpoken;

class ApplicantLanguageSpokenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicantLanguageSpoken::create([
            'language_spoken' => 'bisaya',
            'can_read' => 1,
            'can_write' => 1,
            'can_speak' => 1,
            'can_understand' => 1,
            'applicant_id' => 1
        ]);

        ApplicantLanguageSpoken::create([
            'language_spoken' => 'filipino',
            'can_read' => 1,
            'can_write' => 1,
            'can_speak' => 1,
            'can_understand' => 1,
            'applicant_id' => 1
        ]);

        ApplicantLanguageSpoken::create([
            'language_spoken' => 'english',
            'can_read' => 1,
            'can_write' => 1,
            'can_speak' => 1,
            'can_understand' => 1,
            'applicant_id' => 1
        ]);
    }
}
