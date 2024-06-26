<?php

use App\Http\Controllers\Sido\BusinessProfileController;
use App\Http\Controllers\Sido\CompetitionStatusController;
use App\Http\Controllers\Sido\PersonalProfileController;
use App\Http\Controllers\Sido\ProjectionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/test', function(){
    return 'Test Api';
});
Route::get('/applicant-profiles', [PersonalProfileController::class, 'index']);
Route::get('/application-before-submission/{slug}', [PersonalProfileController::class, 'show']);
Route::post('/create-applicant-profile', [PersonalProfileController::class, 'store']);

Route::post('/create-business-profile/{slug}', [BusinessProfileController::class, 'store']);

Route::post('/create-competition-profile/{slug}', [CompetitionStatusController::class, 'store']);
Route::post('/create-business-projection/{slug}', [ProjectionController::class, 'store']);