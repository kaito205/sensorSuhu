<?php

use App\Http\Controllers\SensorController;
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
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/get_data', [SensorController::class, 'getdata'])->name('getdata');
Route::get('/update/{temperature}/{humidity}', [SensorController::class, 'update']);

// Route::get('/', [SensorController::class, 'temperature']);
// Route::get('/humidity', [SensorController::class, 'humidity']);
// Route::get('/simpan/{temperature}/{humidity}', [SensorController::class, 'simpan']);
