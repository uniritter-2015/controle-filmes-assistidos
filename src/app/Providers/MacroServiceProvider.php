<?php

namespace app\Providers;

use Illuminate\Support\ServiceProvider;

class MacroServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require base_path() . '/resources/macros.php';
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}