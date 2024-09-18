<?php

use App\Http\Controllers\Admin\CloudBackUpController;
use App\Http\Controllers\Admin\CloudController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\DomainController;
use App\Http\Controllers\Admin\EmailServerController;
use App\Http\Controllers\Admin\GoogleWorkspaceController;
use App\Http\Controllers\Admin\HostingController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\ServerController;
use App\Http\Controllers\Admin\SolutionController as AdminSolutionController;
use App\Http\Controllers\Admin\SslController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Page\AffiliateController;
use App\Http\Controllers\Page\CloudController as PageCloudController;
use App\Http\Controllers\Page\DomainController as PageDomainController;
use App\Http\Controllers\Page\EmailController;
use App\Http\Controllers\Page\HomeController;
use App\Http\Controllers\Page\HostingController as PageHostingController;
use App\Http\Controllers\Page\ServerController as PageServerController;
use App\Http\Controllers\Page\SolutionController;
use App\Http\Controllers\Page\SslController as PageSslController;
use App\Models\CloudBackup;
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








Route::get('/dang-nhap', function () {
    return view('login.index');
})->name('form_login');

Route::post('', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('auth/google', [LoginController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);


Route::middleware(['checkLogin', 'checkRole:1'])->prefix('admin')->name('admin.')->group(function () {
    Route::prefix('solution')->name('solution.')->group(function () {
        Route::get('', [AdminSolutionController::class, 'index'])->name('index');
        Route::get('search', [AdminSolutionController::class, 'search'])->name('search');
        Route::delete('delete/{id}', [AdminSolutionController::class, 'delete'])->name('delete');
        Route::get('add', [AdminSolutionController::class, 'add'])->name('add');
        Route::post('store', [AdminSolutionController::class, 'store'])->name('store');
        Route::get('edit/{id}', [AdminSolutionController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [AdminSolutionController::class, 'update'])->name('update');
    });
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

        Route::get('location', [ServerController::class, 'indexlocation'])->name('indexlocation');
        Route::get('add-server-location', [ServerController::class, 'addformlocation'])->name('addformlocation');
        Route::post('add-server-location', [ServerController::class, 'addsubmitlocation'])->name('addsubmitlocation');
        Route::get('edit-server-location/{id}', [ServerController::class, 'editformlocation'])->name('editformlocation');
        Route::post('edit-server-location/{id}', [ServerController::class, 'editsubmitlocation'])->name('editsubmitlocation');
        Route::post('delete-server-location/{id}', [ServerController::class, 'deletelocation'])->name('deletelocation');
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

    Route::prefix('cloudbackup')->name('cloudbackup.')->group(function () {
        Route::get('', [CloudBackUpController::class, 'index'])->name('index');
        Route::get('add', [CloudBackUpController::class, 'addform'])->name('addform');
        Route::post('add', [CloudBackUpController::class, 'addsubmit'])->name('addsubmit');
        Route::get('edit/{id}', [CloudBackUpController::class, 'editform'])->name('editform');
        Route::post('edit/{id}', [CloudBackUpController::class, 'editsubmit'])->name('editsubmit');
        Route::post('delete/{id}', [CloudBackUpController::class, 'delete'])->name('delete');
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

    Route::prefix('email')->name('email.')->group(function () {
        Route::get('', [EmailServerController::class, 'index'])->name('index');
        Route::get('add', [EmailServerController::class, 'addform'])->name('addform');
        Route::post('add', [EmailServerController::class, 'addsubmit'])->name('addsubmit');
        Route::get('edit/{id}', [EmailServerController::class, 'editform'])->name('editform');
        Route::post('edit/{id}', [EmailServerController::class, 'editsubmit'])->name('editsubmit');
        Route::post('delete/{id}', [EmailServerController::class, 'delete'])->name('delete');
    });

    Route::prefix('googleworkspace')->name('googleworkspace.')->group(function () {

        Route::get('', [GoogleWorkspaceController::class, 'index'])->name('index');
        Route::get('add', [GoogleWorkspaceController::class, 'addform'])->name('addform');

        Route::prefix('education')->name('education.')->group(function () {
            Route::post('add', [GoogleWorkspaceController::class, 'addsubmitEducation'])->name('addsubmit');
            Route::get('edit/{id}', [GoogleWorkspaceController::class, 'editformEducation'])->name('editform');
            Route::post('edit/{id}', [GoogleWorkspaceController::class, 'editsubmitEducation'])->name('editsubmit');
            Route::post('delete/{id}', [GoogleWorkspaceController::class, 'deleteEducation'])->name('delete');
        });

        Route::prefix('business')->name('busniess.')->group(function () {
            Route::post('add', [GoogleWorkspaceController::class, 'addSubmitBusiness'])->name('addsubmit');
            Route::get('edit/{id}', [GoogleWorkspaceController::class, 'editformBusiness'])->name('editform');
            Route::post('edit/{id}', [GoogleWorkspaceController::class, 'editsubmitBusiness'])->name('editsubmit');
            Route::post('delete/{id}', [GoogleWorkspaceController::class, 'deleteBusiness'])->name('delete');
        });
    });
});





// fe
Route::name('page.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('ten-mien/dang-ky-ten-mien', [PageDomainController::class, 'index'])->name('domain-registration');

    Route::get('hosting/linux-hosting', [PageHostingController::class, 'linux'])->name('linux-hosting');
    Route::get('hosting/windows-hosting', [PageHostingController::class, 'windows'])->name('windows-hosting');
    Route::post('hosting/pay', [PageHostingController::class, 'pay'])->name('hosting-pay');

    Route::prefix('may-chu')->group(function () {
        Route::get('may-chu-cloud-server', [PageCloudController::class, 'server'])->name('cloud-server');
        Route::get('may-chu-cloud-backup', [PageCloudController::class, 'backup'])->name('cloud-backup');
        Route::get('may-chu-cloud-storage', [PageCloudController::class, 'storage'])->name('cloud-storage');
        Route::get('vps-cloud-quoc-te', [PageCloudController::class, 'international'])->name('cloud-international');
        Route::Post('cloud/pay', [PageCloudController::class, 'cloudpay'])->name('cloud.pay');
        Route::Post('cloudbackup/pay', [PageCloudController::class, 'cloudbackuppay'])->name('cloudbackup.pay');
        Route::Post('server_-backup365/pay', [PageCloudController::class, 'payBackup365'])->name('backup365.pay');
        // Route::get('vps-cloud-quoc-te', [PageCloudController::class, 'international'])->name('cloud-international');
        Route::get('may-chu', [PageServerController::class, 'dedicatedServer'])->name('dedicated-server');
        Route::get('cho-dat-may-chu-colo', [PageServerController::class, 'serverLocation'])->name('server-location');
        Route::get('backup365', [PageServerController::class, 'serverBackup'])->name('server-backup');
        Route::get('dich-vu-quan-ly-may-chu', [PageServerController::class, 'serverAdministration'])->name('server-administration');
        Route::Post('pay', [PageServerController::class, 'pay'])->name('server.pay');
        Route::Post('server-location/pay', [PageServerController::class, 'paylocation'])->name('serverlocation.pay');
    });

    Route::get('email/email-server', [EmailController::class, 'emailServer'])->name('email-server');
    Route::post('email/email-server-pay', [EmailController::class, 'emailServerPay'])->name('email-server-pay');

    Route::get('email/google-workspace', [EmailController::class, 'googleWorkspace'])->name('google-workspace');
    Route::post('email/google-workspace-education/pay', [EmailController::class, 'googleWorkspaceEducationPay'])->name('google-workspace-education-pay');
    Route::post('email/google-workspace-business/pay', [EmailController::class, 'googleWorkspaceBusinessPay'])->name('google-workspace-business-pay');

    Route::get('ssl-bao-mat/bang-gia-comodo-ssl', [PageSslController::class, 'comodo'])->name('ssl-comodo');
    Route::get('ssl-bao-mat/bang-gia-geotrust-ssl', [PageSslController::class, 'geotrust'])->name('ssl-geotrust');
    Route::get('ssl-bao-mat/bang-gia-symantec-ssl', [PageSslController::class, 'symantec'])->name('ssl-symantec');
    Route::post('ssl/pay', [PageSslController::class, 'pay'])->name('ssl-pay');

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
