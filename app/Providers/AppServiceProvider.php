<?php

namespace App\Providers;

use App\Models\CompanyInfo;
use App\Models\Service;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        view()->composer(['*'], function ($view){
            $view->with([
//                'companyWhatsappNumber' => CompanyInfo::where('info', 'whatsapp number')->first()->value,
                'allServices' => Service::all(),
                'nav' => '404',
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
