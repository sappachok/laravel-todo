<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\SpaController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('blogs',BlogController::class);
    Route::resource('todos',TodoController::class);
    Route::put('/todos', [TodoController::class, 'check_update'])->name('todos.check_update');

    Route::get('/tutors', [TutorController::class, 'index'])->name('tutors.index');
    Route::get('/tutors/emit', [TutorController::class, 'emit'])->name('tutors.emit');
    Route::get('/tutors/event', [TutorController::class, 'event'])->name('tutors.event');

    Route::get('/spa', [SpaController::class, 'index'])->name('spa.index');

});

require __DIR__.'/auth.php';
