<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use App\Models\Company;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
         if ($this->app->runningInConsole() && Artisan::isDownForMaintenance()) {
            return; // Não faz nada durante a instalação via Composer
         }
        
        if (Schema::hasTable('company') && Company::count() > 0) {
            View::share('company', DB::table('company')->first());
        }
    }
}
