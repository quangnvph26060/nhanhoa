<?php

namespace App\Providers;

use App\Models\EmailSetting;
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
        view()->share('config', $config);

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
