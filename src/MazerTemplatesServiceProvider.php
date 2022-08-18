<?php

namespace Skys215\mazerTemplates;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class MazerTemplatesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'mazer-templates');
        $this->publishes([
            __DIR__.'/../views/common' => resource_path('views/vendor/mazer-templates/common'),
        ], 'mazer-views');

        $this->publishes([
            __DIR__.'/../views/templates' => resource_path('views/vendor/mazer-templates/templates'),
        ], 'mazer-templates');

        Paginator::defaultView('mazer-templates::common.paginator');
        Paginator::defaultSimpleView('mazer-templates::common.simple_paginator');

        Blade::directive('ocb', function () {
            return '<?php echo "{{ " ?>';
        });

        Blade::directive('ccb', function () {
            return '<?php echo " }}" ?>';
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
