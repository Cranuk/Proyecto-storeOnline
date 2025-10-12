<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Blade;
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
        Carbon::setLocale('es');
        
        // Directiva para fecha
        Blade::directive('formatDate', function ($date) {
            return "<?php echo \App\Helpers\Helpers::formatDate($date); ?>";
        });

        // Directiva para moneda
        Blade::directive('formatCurrency', function ($price) {
            return "<?php echo \App\Helpers\Helpers::formatCurrency($price); ?>";
        });

        // Directiva para cantidad con unidad
        Blade::directive('formatAmount', function ($expression) {
            return "<?php echo \App\Helpers\Helpers::formatAmount($expression); ?>";
        });

        // Directiva para balance positivo
        Blade::directive('getBalancePositive', function ($id='') {
            return "<?php echo \App\Helpers\Helpers::getBalancePositive($id); ?>";
        });

        // Directiva para balance negativo
        Blade::directive('getBalanceNegative', function () {
            return "<?php echo \App\Helpers\Helpers::getBalanceNegative(); ?>";
        });

        // Directiva para balance total
        Blade::directive('getBalance', function () {
            return "<?php echo \App\Helpers\Helpers::getBalance(); ?>";
        });
    }
}
