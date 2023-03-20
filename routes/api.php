<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantsController;
use App\Http\Controllers\ValidatorController;
use App\Http\Controllers\ApplicantValidatorController;
use App\Http\Controllers\EmployerController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/applicants', [ApplicantsController::class, 'index']);

Route::prefix('v2')->group(function() {
    Route::prefix('/validator')->group(function() {
        Route::post('/step-1', [ValidatorController::class, 'validateStep1']);
        Route::post('/step-2', [ValidatorController::class, 'validateStep2']);
        Route::post('/step-3', [ValidatorController::class, 'validateStep3']);
        Route::post('/step-4', [ValidatorController::class, 'validateStep4']);
        Route::post('/step-5', [ValidatorController::class, 'validateStep5']);
    });

    Route::prefix('/applicant-validator')->group(function() {
        Route::post('/step-1', [ApplicantValidatorController::class, 'validateStep1']);
        Route::post('/step-2', [ApplicantValidatorController::class, 'validateStep2']);
        Route::post('/step-3', [ApplicantValidatorController::class, 'validateStep3']);
        Route::post('/step-4', [ApplicantValidatorController::class, 'validateStep4']);
        Route::post('/step-5', [ApplicantValidatorController::class, 'validateStep5']);
        Route::post('/step-6', [ApplicantValidatorController::class, 'validateStep6']);
        Route::post('/step-7', [ApplicantValidatorController::class, 'validateStep7']);
        Route::post('/step-8', [ApplicantValidatorController::class, 'validateStep8']);
        Route::post('/step-9', [ApplicantValidatorController::class, 'validateStep9']);
        Route::post('/step-10', [ApplicantValidatorController::class, 'validateStep10']);
    });

    Route::resource('/employer', EmployerController::class);
});