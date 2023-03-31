<?php

use App\Http\Controllers\PetController;
use App\Http\Controllers\PetOwnerController;
use App\Http\Controllers\VeterinarianController;

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

Route::resource('veterinarians', VeterinarianController::class);
Route::resource('petowners', PetOwnerController::class);
Route::resource('pets', PetController::class);
