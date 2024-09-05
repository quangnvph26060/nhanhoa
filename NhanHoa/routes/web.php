<?php

use App\Http\Controllers\Admin\CloudController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\DomainController;
use App\Http\Controllers\Admin\HostingController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\ServerController;
use App\Http\Controllers\Admin\SslController;
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
        Route::post('add', [ServerController::class, 'addsubmit'])->name('addsubmit');
        Route::get('edit/{id}', [ServerController::class, 'editform'])->name('editform');
        Route::post('edit/{id}', [ServerController::class, 'editsubmit'])->name('editsubmit');
        Route::post('delete/{id}', [ServerController::class, 'delete'])->name('delete');
    });

    Route::prefix('domain')->name('domain.')->group(function () {
        Route::get('', [DomainController::class, 'index'])->name('index');
        Route::get('add', [DomainController::class, 'addform'])->name('addform');
        Route::post('add', [DomainController::class, 'addsubmit'])->name('addsubmit');
        Route::get('edit/{id}', [DomainController::class, 'editform'])->name('editform');
        Route::post('edit/{id}', [DomainController::class, 'editsubmit'])->name('editsubmit');
        Route::post('delete/{id}', [DomainController::class, 'delete'])->name('delete');

    });

    Route::prefix('hosting')->name('hosting.')->group(function () {
        Route::get('', [HostingController::class, 'index'])->name('index');
        Route::get('add', [HostingController::class, 'addform'])->name('addform');
        Route::post('add', [HostingController::class, 'addsubmit'])->name('addsubmit');
        Route::get('edit/{id}', [HostingController::class, 'editform'])->name('editform');
        Route::post('edit/{id}', [HostingController::class, 'editsubmit'])->name('editsubmit');
        Route::post('delete/{id}', [HostingController::class, 'delete'])->name('delete');

    });

    Route::prefix('cloud')->name('cloud.')->group(function () {
        Route::get('', [CloudController::class, 'index'])->name('index');
         Route::get('add', [CloudController::class, 'addform'])->name('addform');
        Route::post('add', [CloudController::class, 'addsubmit'])->name('addsubmit');
        Route::get('edit/{id}', [CloudController::class, 'editform'])->name('editform');
        Route::post('edit/{id}', [CloudController::class, 'editsubmit'])->name('editsubmit');
        Route::post('delete/{id}', [CloudController::class, 'delete'])->name('delete');
    });

    Route::prefix('ssl')->name('ssl.')->group(function () {
        Route::get('', [SslController::class, 'index'])->name('index');
         Route::get('add', [SslController::class, 'addform'])->name('addform');
        Route::post('add', [SslController::class, 'addsubmit'])->name('addsubmit');
        Route::get('edit/{id}', [SslController::class, 'editform'])->name('editform');
        Route::post('edit/{id}', [SslController::class, 'editsubmit'])->name('editsubmit');
        Route::post('delete/{id}', [SslController::class, 'delete'])->name('delete');
    });

    Route::prefix('promotion')->name('promotion.')->group(function () {
        Route::get('', [PromotionController::class, 'index'])->name('index');
         Route::get('add', [PromotionController::class, 'addform'])->name('addform');
        Route::post('add', [PromotionController::class, 'addsubmit'])->name('addsubmit');
        Route::get('edit/{id}', [PromotionController::class, 'editform'])->name('editform');
        Route::post('edit/{id}', [PromotionController::class, 'editsubmit'])->name('editsubmit');
        Route::post('delete/{id}', [PromotionController::class, 'delete'])->name('delete');
    });


});
