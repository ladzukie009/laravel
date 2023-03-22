<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/cars', [CarController::class, 'index']);
// Route::get('/create', [CarController::class, 'create']);
// Route::post('/create', [CarController::class, 'store']);
// Route::get('/car/{carId}', [CarController::class, 'show']);

// Route::resource('cars', 'CarController');
Route::resource('cars', CarController::class);