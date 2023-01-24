<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantFormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/applicant-form', function() {
    return view('applicant_form');
})->name('applicant-form');

Route::get('/employer-form', function() {
    return view('employer_form');
})->name('employer-form');


// Applicant Form
// Route::get('/applicant', [ApplicantFormController::class, 'index'])->name('applicant-form');