<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValidatorController extends Controller
{
    function validateStep1(Request $request) {
        $validator = Validator::make($request->all(), [
            'establishment_name' => 'required',
            'establishment_accronym' => 'required',
            'TIN_number' => 'required',
            'employer_type' => 'required',
            'total_work_force' => 'required',
            'address' => 'required',
            'line_of_bir' => 'required',
            'barangay' => 'required',
            'city_or_municipality' => 'required',
            'province' => 'required',
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

    function validateStep2(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'fullname' => 'required',
            'position' => 'required',
            'telephone_number' => 'required',
            'mobile_number' => 'required',
            'fax_number' => 'required',
            'email_address' => 'required|email',
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

    function validateStep3(Request $request) {
        $validator = Validator::make($request->all(), [
            'position_title' => 'required',
            'nature_of_work' => 'required',
            'job_description' => 'required',
            'place_of_work' => 'required',
            'salary' => 'required',
            'vacancy_count' => 'required',
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

    function validateStep4(Request $request) {

        $validator = Validator::make($request->all(), [
            'work_of_experience' => 'required',
            'sex' => 'required',
            'religion' => 'required',
            'civil_status' => 'required',
            'is_accept_disability' => 'required',
            'disability_type' => 'required',
            'educational_level' => 'required',
            'course_or_major' => 'required',
            'license' => 'required',
            'eligibility' => 'required',
            'certification' => 'required',
            'language_or_dialect' => 'required',
            'preferred_residence' => 'required',
            'other_qualification' => 'required',
            'nature_of_work' => 'required',
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

    function validateStep5(Request $request) {
        $validator = Validator::make($request->all(), [
            'posting_date' => 'required',
            'valid_until' => 'required',
            'e_signature' => 'required',
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
}
