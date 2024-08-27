<?php

use App\Http\Controllers\Admin\DashBoardController;
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

Route::post('', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('auth/google', [LoginController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);


Route::middleware(['checkLogin'])->prefix('admin')->name('admin.')->group(function () {
    Route::prefix('profit')->name('profit.')->group(function () {
        Route::get('', [ReportController::class, 'profitIndex'])->name('index');
        Route::post('/profit-report', [ReportController::class, 'getProfitReportByFilterNew'])->name('getProfitReportByFilter');
        Route::post('/profit-report-pdf', [ReportController::class, 'getProfitReportByFilterPDF'])->name('getProfitReportByFilterPDF');
    });
     Route::get('', [DashBoardController::class, 'index'])->name('dashboard');

});
