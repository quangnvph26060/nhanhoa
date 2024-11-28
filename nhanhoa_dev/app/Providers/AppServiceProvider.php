<?php

namespace App\Providers;

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
        view()->share('config', $config);

        // Bạn có thể chia sẻ biến $config này với toàn bộ view nếu cần
        view()->share('config', $config);
    }
}
