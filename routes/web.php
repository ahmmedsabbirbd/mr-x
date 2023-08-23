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
//Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
    Route::get('/admin/homepage', [\App\Http\Controllers\Admin\HomeController::class, 'homePage'])->name('admin.homepage');
    Route::post('/admin/homepage/hero-update', [\App\Http\Controllers\Admin\HomeController::class, 'heroDataUpdate'])->name('admin.hero.update');
    Route::post('/admin/homepage/about-update', [\App\Http\Controllers\Admin\HomeController::class, 'aboutDataUpdate'])->name('admin.about.update');
    Route::get('/admin/resumepage', [\App\Http\Controllers\Admin\ResumeController::class, 'resumePage'])->name('admin.resumeepage');
    Route::get('/admin/resumepage/showEducation/{id}', [\App\Http\Controllers\Admin\ResumeController::class, 'showEducation']);
    Route::delete('/admin/resumepage/educationDelete/{id}', [\App\Http\Controllers\Admin\ResumeController::class, 'deleteEducation']);
    Route::post('/admin/resumepage/education', [\App\Http\Controllers\Admin\ResumeController::class, 'storeEducation']);
    Route::put('/admin/resumepage/updateEducation/{id}', [\App\Http\Controllers\Admin\ResumeController::class, 'updateEducation']);
    Route::get('/admin/resumepage/showSkill/{id}', [\App\Http\Controllers\Admin\ResumeController::class, 'showSkill']);
    Route::delete('/admin/resumepage/skillDelete/{id}', [\App\Http\Controllers\Admin\ResumeController::class, 'deleteSkill']);
    Route::post('/admin/resumepage/skill', [\App\Http\Controllers\Admin\ResumeController::class, 'storeSkill']);
    Route::put('/admin/resumepage/updateSkill/{id}', [\App\Http\Controllers\Admin\ResumeController::class, 'updateSkill']);
    Route::get('/admin/resumepage/showLanguage/{id}', [\App\Http\Controllers\Admin\ResumeController::class, 'showLanguage']);
    Route::delete('/admin/resumepage/languageDelete/{id}', [\App\Http\Controllers\Admin\ResumeController::class, 'languageDelete']);
    Route::post('/admin/resumepage/language', [\App\Http\Controllers\Admin\ResumeController::class, 'storeLanguage']);
    Route::put('/admin/resumepage/updateLanguage/{id}', [\App\Http\Controllers\Admin\ResumeController::class, 'updateLanguage']);
    Route::post('/admin/resumepage/experience', [\App\Http\Controllers\Admin\ResumeController::class, 'storeExperience']);
    Route::delete('/admin/resumepage/experienceDelete/{id}', [\App\Http\Controllers\Admin\ResumeController::class, 'deleteExperience']);
    Route::get('/admin/resumepage/showExperience/{id}', [\App\Http\Controllers\Admin\ResumeController::class, 'showExperience']);
    Route::put('/admin/resumepage/updateExperience/{id}', [\App\Http\Controllers\Admin\ResumeController::class, 'experienceUpdate']);
    Route::get('/admin/projectpage', [\App\Http\Controllers\Admin\ProjectController::class, 'projectpage'])->name('admin.projectpage');
    Route::get('/admin/contactpage', [\App\Http\Controllers\Admin\ContactController::class, 'contactpage'])->name('admin.contactpage');
    Route::get('/admin/contactpage/contactMessageList', [\App\Http\Controllers\Admin\ContactController::class, 'ContactMessageList'])->name('admin.ContactMessageList');
    Route::get('/admin/contactpage/getContactMessage/{id}', [\App\Http\Controllers\Admin\ContactController::class, 'getContactMessage'])->name('admin.getContactMessage');
    Route::delete('/admin/contactpage/getContactMessage/{id}', [\App\Http\Controllers\Admin\ContactController::class, 'deleteContactMessage'])->name('admin.deleteContactMessage');
    Route::get('/admin/socailmediapage', [\App\Http\Controllers\Admin\SocailMediaController::class, 'socailmediapage'])->name('admin.socailmediapage');
    Route::put('/admin/socailmediapage/socail-update', [\App\Http\Controllers\Admin\SocailMediaController::class, 'socailUpdate'])->name('admin.socailUpdate');
//});
