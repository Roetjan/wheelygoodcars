<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ProfileController;
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

Route::middleware('auth')->group(function () {
    //
});

Route::middleware('auth')->group(function () {
    Route::get('/cars/create', [CarController::class, 'create_step1'])->name('cars.create1');

});

Route::post('/cars/create_form', [CarController::class, 'create_step2'])->name('cars.create2');
Route::post('/cars/create', [CarController::class, 'create_car'])->name('cars.create');


require __DIR__.'/auth.php';
