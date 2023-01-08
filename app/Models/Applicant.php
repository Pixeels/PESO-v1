<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;



    public function applicant_address() {
        return $this->hasMany(ApplicantAddress::class);
    }

    public function applicant_educational_background() {
        return $this->hasMany(ApplicantEducationalBackground::class);
    }

    public function applicant_eligibility() {
        return $this->hasMany(ApplicantEligibility::class);
    }

    public function applicant_job_preference() {
        return $this->hasMany(ApplicantJobPreference::class);
    }

    public function applicant_job_preference_location() {
        return $this->hasMany(ApplicantJobPreferenceLocation::class);
    }

    public function applicant_language_spoken() {
        return $this->hasOne(ApplicantLanguageSpoken::class);
    }

    public function applicant_status() {
        return $this->hasOne(ApplicantStatus::class);
    }

    public function applicant_work_experience() {
        return $this->hasMany(ApplicantWorkExperience::class);
    }

    

}
