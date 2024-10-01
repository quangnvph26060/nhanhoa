<?php

namespace App\Providers;

use App\Models\Client;
use App\Models\Cloud;
use App\Models\EmailServer;
use App\Models\EmailSetting;
use App\Models\Footer;
use App\Models\SgoGiaiphap;
use App\Models\Ssl;
use App\Services\ConfigService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $config = \App\Models\Config::first();
        //  $this->loadEmailSettingsToEnv();
        //  dd($config);
        $ssl = Ssl::orderBy('price', 'asc')->first();
        $cloud = Cloud::orderBy('price', 'asc')->first();
        $email = EmailServer::orderBy('price', 'asc')->first();
        $clients = Client::all();
        $giaiphapheader = SgoGiaiphap::first();
        $giaiphapall = SgoGiaiphap::get();
        $footers = Footer::get();
        view()->share([
            'config' => $config,
            'ssl' => $ssl,
            'cloud' => $cloud,
            'email' => $email,
            'client' => count($clients),
            'giaiphapheader' => $giaiphapheader,
            'giaiphapall' => $giaiphapall,
            'footers' => $footers,
        ]);

    }

    protected function loadEmailSettingsToEnv()
    {
        // Lấy cấu hình email từ database
        $emailSettings = EmailSetting::first();

        if ($emailSettings) {
            // Đổ dữ liệu từ bảng email_settings vào file .env
            $this->updateEnv([
                'MAIL_USERNAME' => $emailSettings->mail_username,
                'MAIL_PASSWORD' => $emailSettings->mail_password,
            ]);
        }
    }

    /**
     * Cập nhật file .env với dữ liệu mới
     */
    protected function updateEnv($data)
    {
        $envPath = base_path('.env');

        foreach ($data as $key => $value) {
            if (file_exists($envPath)) {
                file_put_contents($envPath, preg_replace(
                    "/^{$key}=.*/m",
                    "{$key}={$value}",
                    file_get_contents($envPath)
                ));
            }
        }
    }
}
