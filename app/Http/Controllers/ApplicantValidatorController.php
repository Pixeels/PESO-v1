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
        
    }

    public function validateStep4(Request $request) {
        
    }

    public function validateStep5(Request $request) {
        
    }

    public function validateStep6(Request $request) {
        
    }

    public function validateStep7(Request $request) {
        
    }

    public function validateStep8(Request $request) {
        
    }

    public function validateStep9(Request $request) {
        
    }

    public function validateStep10(Request $request) {
        
    }

}
