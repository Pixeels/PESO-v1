<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applicant;

class ApplicantsController extends Controller
{
    public function index() {
        $applicants = Applicant::orderBy('id')->get();

        return $applicants[0]->applicant_educational_background;
    }
}
