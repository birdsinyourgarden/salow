<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PhysicianController;
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

Route::get('/', [App\Http\Controllers\SpecialtyController::class, 'index'])->name('home');
//Route::get('/home',[SpecialtyController::class, 'index']);

//Show
//Route::get('/show/{id}', [SpecialtyController::class, 'show'])->name('showSpecialty');
