<?php

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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/a', function () {
    return ('FUCKIN WORD');
});

Route::get('/home', [HomeController:: class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile/indentity', [ProfileController::class, 'indentity']);
Route::get('/profile/family', [ProfileController::class, 'family']);
