<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('home');


Route::get('user', function() {
    return view('layouts.user');
})->name('user');


Route::get('/dashboard', function () {
    return view('paciente/dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard_medico', function () {
    return view('medico/dashboard');
})->middleware(['auth'])->name('dashboard_medico');

require __DIR__.'/auth.php';

