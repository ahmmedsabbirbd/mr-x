<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Page Route
Route::get('/', [HomeController::class, 'page']);
Route::get('/resume', [ResumeController::class, 'page']);
Route::get('/projects', [ProjectController::class, 'page']);
Route::get('/contact', [ContactController::class, 'page']);

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

Auth::routes();

// Admin Route
Route::get('/home', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
Route::get('/admin/homepage', [\App\Http\Controllers\Admin\HomeController::class, 'homePage'])->name('admin.homepage');
Route::get('/admin/resumepage', [\App\Http\Controllers\Admin\ResumeController::class, 'resumePage'])->name('admin.resumeepage');
Route::get('/admin/projectpage', [\App\Http\Controllers\Admin\ProjectController::class, 'projectpage'])->name('admin.projectpage');
Route::get('/admin/contactpage', [\App\Http\Controllers\Admin\ContactController::class, 'contactpage'])->name('admin.contactpage');
Route::get('/admin/socailmediapage', [\App\Http\Controllers\Admin\SocailMediaController::class, 'socailmediapage'])->name('admin.socailmediapage');

