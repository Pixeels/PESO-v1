<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            ApplicantSeeder::class,
            ApplicantAddressSeeder::class,
            ApplicantEducationalBackgroundSeeder::class,
            ApplicantEligibilitySeeder::class,
            ApplicantJobPreferenceSeeder::class,
            ApplicantJobPreferenceLocationSeeder::class,
            ApplicantLanguageSpokenSeeder::class,
            ApplicantStatusSeeder::class,
            ApplicantWorkExperienceSeeder::class,
            EmployerSeeder::class,
            EmployerAddressSeeder::class,
            EmployerEstablishmentContactDetailSeeder::class,
            EmployerPostingDetailSeeder::class,
            EmployerQualificationRequirementSeeder::class,
            EmployerVacancyDetailSeeder::class
        ]);
    }
}
