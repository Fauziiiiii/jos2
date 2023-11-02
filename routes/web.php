<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('dashboard.index');
// });

// Rute yang dapat diakses oleh semua pengguna
Route::middleware(["guest"])->group(function () {
    Route::get("/", [AuthController::class, "index"])->name("login");
    Route::post("/", [AuthController::class, "login"])->name("auth.login");
});

// Grup rute untuk pengguna yang sudah login
Route::middleware(['auth'])->group(function () {
    // Rute yang hanya dapat diakses oleh pengguna yang sudah login
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('');

    Route::get('/user', [UserController::class, 'index']);

    Route::get('/paket', [PaketController::class, 'index']);

    Route::get('/logout', [AuthController::class, 'logout']);

        Route::get('/outlet', [OutletController::class, 'index'])->name('outlet.index');
        Route::post('/outlet/create', [OutletController::class, 'store']);
        Route::get('/outlet/{id}/edit', [OutletController::class, 'edit']);
        Route::put('/outlet/{id}', [OutletController::class, 'update']);
        Route::delete('/outlet/{id}', [OutletController::class, 'destroy']);

});

