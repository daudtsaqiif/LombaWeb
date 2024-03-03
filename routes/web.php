<?php

use App\Http\Controllers\addCarController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\carCatalogue;
use App\Http\Controllers\loginController;
use App\Http\Controllers\sewaController;
use App\Http\Controllers\signinController;
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

Route::get('/', function () {
    return view('welcome');
});

//catalogue
Route::resource('car', carCatalogue::class);
//login
Route::resource('login', loginController::class);
//sewa
Route::resource('sewa', sewaController::class);
//signin
Route::resource('signin', signinController::class);