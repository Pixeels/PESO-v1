<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantsController;
use App\Http\Controllers\ValidatorController;
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
});