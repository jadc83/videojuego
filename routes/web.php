<?php

use App\Http\Controllers\PosesionController;
use App\Http\Controllers\VideojuegoController;
use App\Models\Videojuego;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('videojuegos', VideojuegoController::class);
Route::resource('posesiones', PosesionController::class);


require __DIR__.'/auth.php';
