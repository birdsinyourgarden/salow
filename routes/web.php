34 lines (26 sloc)  1.16 KB

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PhysicianController;
use App\Http\Controllers\SpecialtyController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Show
Route::get('/show/specialty/{id}', [SpecialtyController::class, 'show'])->name('showSpecialty');
Route::get('/show/physician/{id}', [PhysicianController::class, 'show'])->name('showPhysician');


//Get
Route::get('/specialties/{id}/physicians', [PhysicianController::class, 'indexBySpecialty'])->name('indexBySpecialty');
Route::get('/physicians/{id}/showBySpecialty', [PhysicianController::class, 'showBySpecialty'])->name('showPhysicianBySpecialty');