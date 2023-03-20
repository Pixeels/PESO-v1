<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employer;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'OK';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $employer = Employer::create([
        //     "establishment_name" => $request->establishment_name,
        //     "establishment_accronym" => $request->establishment_accronym,
        //     "TIN_number" => $request->TIN_number,
        //     "employer_type" => $request->employer_type,
        //     "total_work_force" => $request->total_work_force,
        //     "e_signature" => $request->e_signature,
        //     "is_authorization_accepted" => 1,
        //     "is_authorization_accepted" => 1,
        // ]);

        // $employer->employer_address()->create([
        //     "address" => $request->address,
        //     "barangay" => $request->barangay,
        //     "city_or_municipality" => $request->city_or_municipality,
        //     "province" => $request->province,
        // ]);

        // $employer->employer_establishment_contact_detail()->create([
        //     "title" => $request->title,
        //     "fullname" => $request->fullname,
        //     "position" => $request->position,
        //     "telephone_number" => $request->telephone_number,
        //     "mobile_number" => $request->mobile_number,
        //     "fax_number" => $request->fax_number,
        //     "email_address" => $request->email_address,
        // ]);

        // $employer->employer_posting_detail()->create([
        //     "posting_date" => $request->posting_date,
        //     "valid_until" => $request->valid_until,
        // ]);

        // $employer->employer_qualification_requirement()->create([
        //     "work_of_experience" => $request->work_of_experience,
        //     "sex" => $request->sex,
        //     "religion" => $request->religion,
        //     "civil_status" => $request->civil_status,
        //     "is_accept_disability" => $request->is_accept_disability,
        //     "disability_type" => $request->disability_type,
        //     "educational_level" => $request->educational_level,
        //     "course_or_major" => $request->course_or_major,
        //     "license" => $request->license,
        //     "eligibility" => $request->eligibility,
        //     "certification" => $request->certification,
        //     "language_or_dialect" => $request->language_or_dialect,
        //     "preferred_residence" => $request->preferred_residence,
        //     "nature_of_work" =>$request->nature_of_work,
        //     "other_qualification" => $request->other_qualification,
        // ]);

        // $employer->employer_vacancy_detail()->create([
        //     "position_title" => $request->position_title,
        //     "job_description" => $request->job_description,
        //     "nature_of_work" => $request->nature_of_work,
        //     "place_of_work" => $request->place_of_work,
        //     "salary" => $request->salary,
        //     "vacancy_count" => $request->vacancy_count,
        // ]);

        $employer = Employer::create([
            "establishment_name" => 'Brightlocal',
            "establishment_accronym" => 'BL',
            "TIN_number" => '3804-3423',
            "employer_type" => 'Recruitment & Placement Agency',
            "total_work_force" => 'Medium (100-199) ',
            "line_of_business" => 'Test',
            "e_signature" => 'brightlocal_esignature.png',
            "is_authorization_accepted" => 1
        ]);

        $employer->employer_address()->create([
            "address" => '2nd floor unknown building',
            "barangay" => 'Poblacion',
            "city_or_municipality" => 'valencia city',
            "province" => 'bukidnon',
            "employer_id" => 1
        ]);

        $employer->employer_establishment_contact_detail()->create([
            "title" => "Miss",
            "fullname" => "Jane Doe",
            "position" => "President",
            "telephone_number" => "N/A",
            "mobile_number" => "084354354",
            "fax_number" => "N/A",
            "email_address" => "janedoe@email.com",
            "employer_id" => 1
        ]);

        $employer->employer_posting_detail()->create([
            "posting_date" => '2022-02-04',
            "valid_until" => '2022-04-03',
            "employer_id" => 1
        ]);

        $employer->employer_qualification_requirement()->create([
            "work_of_experience" => '12months',
            "sex" => 'male',
            "religion" => 'christian',
            "civil_status" => 'single',
            "is_accept_disability" => 'no',
            "disability_type" => 'N/A',
            "educational_level" => "college graduate",
            "course_or_major" => 'BSIT',
            "license" => "N/A",
            "eligibility" => "N/A",
            "certification" => "N/A",
            "language_or_dialect" => "English",
            "preferred_residence" => "valencia city",
            "nature_of_work" => "PESO",
            "other_qualification" => "PESO",
            "employer_id" => 1
        ]);

        $employer->employer_vacancy_detail()->create([
            "position_title" => "Citation Builder",
            "job_description" => "Part-time",
            "nature_of_work" => "Part-time",
            "place_of_work" => "valencia city",
            "salary" => "2000+",
            "vacancy_count" => "5 vacancts",
            "employer_id" => 1
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
