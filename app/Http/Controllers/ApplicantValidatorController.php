<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApplicantValidatorController extends Controller
{
    public function validateStep1(Request $request) {
        $validator = Validator::make($request->all(), [
            'surname' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'suffix' => 'required',
            'birthdate' => 'required',
            'civil_status' => 'required',
            'height' => 'required',
            'religion' => 'required',
            'sex' => 'required',
            'is_actively_looking_for_work' => 'required',
            'find_job_duration' => 'required',
            'is_willing_to_work_immidiately' => 'required',
            'when_to_start_working' => 'required',
            'is_4Ps' => 'required',
            'household_id_4ps' => 'required',
            'pob_province' => 'required',
            'pob_city' => 'required',
            'pob_barangay' => 'required',
            'pop_street' => 'required',
            'pa_province' => 'required',
            'pa_city' => 'required',
            'pa_barangay' => 'required',
            'pa_street' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' =>  400,
                'errors' => $validator->messages()
            ]);
        }
        else {
            return response()->json([
                'status' => 200,
            ]);
        }
    }

    public function validateStep2(Request $request) {
        $validator = Validator::make($request->all(), [
            'email_address' => 'required',
            'phone_number' => 'required',
            'landline_number' => 'required',
            'GSIS_SSS_id' => 'required',
            'pag_ibig_number' => 'required',
            'philhealth_id' => 'required',
            'disability' => 'required',
            'employed' => 'required',
            'employed_status' => 'required',
            'unemployed_status' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' =>  400,
                'errors' => $validator->messages()
            ]);
        }
        else {
            return response()->json([
                'status' => 200,
            ]);
        }
    }

    public function validateStep3(Request $request) {
        $validator = Validator::make($request->all(), [
            'preferred_occupation' => 'required',
            'islocal_preferred_work_location' => 'required',
            'isoverseas_preferred_work_location' => 'required',
            'expected_salary' => 'required',
            'passport_number' => 'required',
            'expiry_date' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' =>  400,
                'errors' => $validator->messages()
            ]);
        }
        else {
            return response()->json([
                'status' => 200,
            ]);
        }
    }

    public function validateStep4(Request $request) {
        $validator = Validator::make($request->all(), [
            'language_or_dialect_proficiency' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' =>  400,
                'errors' => $validator->messages()
            ]);
        }
        else {
            return response()->json([
                'status' => 200,
            ]);
        }
    }

    public function validateStep5(Request $request) {
        $validator = Validator::make($request->all(), [
            'elementary_school' => 'required',
            'elementary_course' => 'required',
            'elementary_year_graduated' => 'required',
            'elementary_undergraduate_level' => 'required',
            'elementary_undergraduate_last_attended' => 'required',
            'elementary_awards_recieved' => 'required',
            'secondary_school' => 'required',
            'secondary_course' => 'required',
            'secondary_year_graduated' => 'required',
            'secondary_undergraduate_level' => 'required',
            'secondary_undergraduate_last_attended' => 'required',
            'secondary_awards_recieved' => 'required',
            'tertiary_school' => 'required',
            'tertiary_course' => 'required',
            'tertiary_year_graduated' => 'required',
            'tertiary_undergraduate_level' => 'required',
            'tertiary_undergraduate_last_attended' => 'required',
            'tertiary_awards_recieved' => 'required',
            'graduate_school' => 'required',
            'graduate_course' => 'required',
            'graduate_year_graduated' => 'required',
            'graduate_undergraduate_level' => 'required',
            'graduate_last_attendend' => 'required',
            'graduate_awards_recieved' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' =>  400,
                'errors' => $validator->messages()
            ]);
        }
        else {
            return response()->json([
                'status' => 200,
            ]);
        }
    }

    public function validateStep6(Request $request) {
        $validator = Validator::make($request->all(), [
            'technical_course_1' => 'required',
            'technical_course_duration_start_1' => 'required',
            'technical_course_duration_end_1' => 'required',
            'technical_course_training_instituition_1' => 'required',
            'technical_course_certificates_recieved_1' => 'required',
            'technical_course_2' => 'required',
            'technical_course_duration_start_2' => 'required',
            'technical_course_duration_end_2' => 'required',
            'technical_course_training_instituition_2' => 'required',
            'technical_course_certificates_recieved_2' => 'required',
            'technical_course_3' => 'required',
            'technical_course_duration_start_3' => 'required',
            'technical_course_duration_end_3' => 'required',
            'technical_course_training_instituition_3' => 'required',
            'technical_course_certificates_recieved_3' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' =>  400,
                'errors' => $validator->messages()
            ]);
        }
        else {
            return response()->json([
                'status' => 200,
            ]);
        }
    }

    public function validateStep7(Request $request) {
        $validator = Validator::make($request->all(), [
            'eligibility_civil_service__name_1' => 'required',
            'eligibility_civil_service__rating_1' => 'required',
            'eligibility_civil_service__examination_date_1' => 'required',
            'eligibility_civil_service__name_2' => 'required',
            'eligibility_civil_service__rating_2' => 'required',
            'eligibility_civil_service__examination_date_2' => 'required',
            'prc_name_1' => 'required',
            'prc_valid_until_1' => 'required',
            'prc_name_2' => 'required',
            'prc_valid_until_2' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' =>  400,
                'errors' => $validator->messages()
            ]);
        }
        else {
            return response()->json([
                'status' => 200,
            ]);
        }
    }

    public function validateStep8(Request $request) {
        $validator = Validator::make($request->all(), [
            'work_experience_company_name_1' => 'required',
            'work_experience_company_address_1' => 'required',
            'work_experience_company_position_1' => 'required',
            'work_experience_company_inclusive_date_1' => 'required',
            'work_experience_company_status_2' => 'required',
            'work_experience_company_name_2' => 'required',
            'work_experience_company_address_2' => 'required',
            'work_experience_company_position_2' => 'required',
            'work_experience_company_inclusive_date_2' => 'required',
            'work_experience_company_status_2' => 'required',
            'work_experience_company_name_3' => 'required',
            'work_experience_company_address_3' => 'required',
            'work_experience_company_position_3' => 'required',
            'work_experience_company_inclusive_date_3' => 'required',
            'work_experience_company_status_3' => 'required',
            'work_experience_company_status_4' => 'required',
            'work_experience_company_name_4' => 'required',
            'work_experience_company_address_4' => 'required',
            'work_experience_company_position_4' => 'required',
            'work_experience_company_inclusive_date_4' => 'required',
            'work_experience_company_status_4' => 'required',
            'work_experience_company_name_5' => 'required',
            'work_experience_company_address_5' => 'required',
            'work_experience_company_position_5' => 'required',
            'work_experience_company_inclusive_date_5' => 'required',
            'work_experience_company_status_5' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' =>  400,
                'errors' => $validator->messages()
            ]);
        }
        else {
            return response()->json([
                'status' => 200,
            ]);
        }
    }

    public function validateStep9(Request $request) {
        $validator = Validator::make($request->all(), [
            'skills' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' =>  400,
                'errors' => $validator->messages()
            ]);
        }
        else {
            return response()->json([
                'status' => 200,
            ]);
        }
    }

    public function validateStep10(Request $request) {
        
    }

}
