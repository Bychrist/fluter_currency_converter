<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\SpnsorhipController;
use App\Http\Controllers\CourseDateController;
use App\Http\Controllers\CourseTimeController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\TrainingFormController;
use App\Http\Controllers\ModeOfTrainingController;

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



Route::get('/',[FrontEndController::class,'welcome'])->name('home');
Route::get('/course-catalogue',[FrontEndController::class,'catalogue'])->name('catalogue');
Route::get('/course-catalogue/{course}',[FrontEndController::class,'course'])->name('course-detail');

Route::get('/dashboard', function () {
    $courses = \App\Models\Course::all();
    $sponsorships = \App\Models\Sponsorship::all();
    $participants = \App\Models\Participant::all();
    $dates = \App\Models\CourseDate::all();
    $times = \App\Models\CourseTime::all();
    $trainers = \App\Models\Trainers::all();
    return view('dashboard',compact('courses','sponsorships','participants','dates','times','trainers'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resources([
        'course' => CourseController::class,
        'trainer' => TrainerController::class,
        'sponsorship' => SpnsorhipController::class,
        'participant' => ParticipantController::class,
        'mode_of_training' => ModeOfTrainingController::class,
        'training_form' => TrainingFormController::class,
        'training_time' => CourseTimeController::class,
        'training_date' => CourseDateController::class,
    ]);
});

require __DIR__.'/auth.php';
