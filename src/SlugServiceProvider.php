<?php

namespace akis\slug;

use Illuminate\Support\ServiceProvider;

class SlugServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../src/Database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../src/views', 'akis/slug');
    }

    public function register()
    {
    }
}
