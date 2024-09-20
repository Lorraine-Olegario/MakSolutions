<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;
use Filament\Navigation\NavigationItem;
use App\Http\Responses\LogoutResponse;
use Filament\Http\Responses\Auth\Contracts\LogoutResponse as LogoutResponseContract;
 
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(LogoutResponseContract::class, LogoutResponse::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Filament::registerNavigationItems([
            NavigationItem::make('Autenticação 2FA')
                ->url('/user/profile') // URL do link
                ->icon('heroicon-o-link') // Ícone do link
        ]);
    }
}
