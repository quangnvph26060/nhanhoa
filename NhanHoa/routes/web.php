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
use App\Http\Controllers\Page\HomeController;
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





// fe
Route::name('page.')->group(function () {
    // Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('ten-mien/dang-ky-ten-mien', [DomainController::class, 'index'])->name('domain-registration');

    Route::get('hosting/linux-hosting', [HostingController::class, 'linux'])->name('linux-hosting');
    Route::get('hosting/windows-hosting', [HostingController::class, 'windows'])->name('windows-hosting');

    Route::prefix('may-chu')->group(function () {
        Route::get('may-chu-cloud-server', [CloudController::class, 'server'])->name('cloud-server');
        Route::get('may-chu-cloud-backup', [CloudController::class, 'backup'])->name('cloud-backup');
        Route::get('may-chu-cloud-storage', [CloudController::class, 'storage'])->name('cloud-storage');
        Route::get('vps-cloud-quoc-te', [CloudController::class, 'international'])->name('cloud-international');
        Route::get('vps-cloud-quoc-te', [CloudController::class, 'international'])->name('cloud-international');
        Route::get('may-chu', [ServerController::class, 'dedicatedServer'])->name('dedicated-server');
        Route::get('cho-dat-may-chu-colo', [ServerController::class, 'serverLocation'])->name('server-location');
        Route::get('backup365', [ServerController::class, 'serverBackup'])->name('server-backup');
        Route::get('dich-vu-quan-ly-may-chu', [ServerController::class, 'serverAdministration'])->name('server-administration');
    });

    Route::get('email/email-server', [EmailController::class, 'emailServer'])->name('email-server');
    Route::get('email/google-workspace', [EmailController::class, 'googleWorkspace'])->name('google-workspace');

    Route::get('ssl-bao-mat/bang-gia-comodo-ssl', [SslController::class, 'comodo'])->name('ssl-comodo');
    Route::get('ssl-bao-mat/bang-gia-geotrust-ssl', [SslController::class, 'geotrust'])->name('ssl-geotrust');
    Route::get('ssl-bao-mat/bang-gia-symantec-ssl', [SslController::class, 'symantec'])->name('ssl-symantec');

    Route::prefix('giai-phap')->group(function () {
        Route::get('tong-dai-vfone', [SolutionController::class, 'vfone'])->name('solution-vfone');
        Route::get('hop-dong-dien-tu', [SolutionController::class, 'esoc'])->name('electronic-contract');
        Route::get('hoa-don-dien-tu', [SolutionController::class, 'electronicInvoice'])->name('electronic-invoice');
    });

    Route::get('uu-dai-nhan-hoa', [AffiliateController::class, 'index'])->name('affiliate');
    Route::get('tin-tuc', [AffiliateController::class, 'news'])->name('news');
    Route::get('lien-he', [AffiliateController::class, 'contact'])->name('contact');
});
//
