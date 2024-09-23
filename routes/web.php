<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController; // Import the CategoryController class
use App\Http\Controllers\ExerciseController; // Import the ExerciseController class
use App\Http\Controllers\ProfileController; // Import the ProfileController class
use App\Http\Controllers\WorkoutSplitDetailController; // Import the WorkoutSplitDetailController class

Route::get('/', function () {
    return view('main');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('index');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});


Route::get('/home', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profile');
});



Route::get('/workoutsplit', function () {
    return view('workoutsplit');
});

Route::get('/myworkouts', function () {
    return view('myworkouts');
});

// Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//     Route::get('/myworkouts', [WorkoutSplitDetailController::class, 'myWorkouts'])->name('myworkouts');
// });

Route::get('/myworkouts', [WorkoutSplitDetailController::class, 'myWorkouts'])->middleware('auth');

Route::get('/elibrary', [CategoryController::class, 'index']); // Updated route for elibrary
Route::get('/elibrary', [ExerciseController::class, 'index']);

// Route for exercise details, passing the ID
Route::get('/elibrarydetails/{id}', [ExerciseController::class, 'show'])->name('elibrarydetails');


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});



