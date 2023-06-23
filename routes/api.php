<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Ajax Route
Route::get('/heroData', [HomeController::class, 'heroData']);
Route::get('/aboutData', [HomeController::class, 'aboutData']);
Route::get('/socialsData', [HomeController::class, 'socialsData']);

Route::get('/experiencesData', [ResumeController::class, 'experiencesData']);
Route::get('/educationsData', [ResumeController::class, 'educationsData']);
Route::get('/skillsData', [ResumeController::class, 'skillsData']);
Route::get('/languagesData', [ResumeController::class, 'languagesData']);

Route::get('/projectsData', [ProjectController::class, 'projectsData']);

Route::post('/contactRequest', [ContactController::class, 'contactRequest']);