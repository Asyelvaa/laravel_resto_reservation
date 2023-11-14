<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
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
    return redirect()->route('list-reservation');
});

Route::get('/reservation/all', 
    [ReservationController::class, 
    'index']
)->name('list-reservation');

Route::get('/reservation/detail/{detail}', 
    [ReservationController::class, 
    'show']
);
Route::get('/menu/menu', 
    [MenuController::class, 
    'index']
);