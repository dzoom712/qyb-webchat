<?php

namespace Dongxiannan\QybWebchat;

use Illuminate\Support\ServiceProvider;

class QybServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/qyb.php' => config_path('qyb.php'), // 发布配置文件到 laravel 的config 下
        ]);

        $this->loadRoutesFrom(__DIR__ . 'routes/routes.php');
    }
}
