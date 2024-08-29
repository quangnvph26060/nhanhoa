<?php

use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\ServerController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
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
    return view('login.index');
})->name('form_login');

Route::get('/user', function () {
    return view('welcome');
})->name('user');


Route::post('', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('auth/google', [LoginController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);


Route::middleware(['checkLogin', 'checkRole:1'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('', [DashBoardController::class, 'index'])->name('dashboard');

    Route::prefix('config')->name('config.')->group(function () {
        Route::get('', [ConfigController::class, 'index'])->name('detail');
        Route::post('', [ConfigController::class, 'update'])->name('update');
    });

    Route::prefix('server')->name('server.')->group(function () {
        Route::get('', [ServerController::class, 'index'])->name('index');
        Route::get('add', [ServerController::class, 'addform'])->name('addform');
    });
});
