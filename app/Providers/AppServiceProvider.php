<?php

namespace App\Providers;

use App\Models\SocialMedia;
use App\Models\TherapeuticArea;
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
        $therapeuticAreas = TherapeuticArea::query()->get();
        $socialMediaInformations = SocialMedia::query()->active()->get();
        \View::share(['therapeuticAreas'=> $therapeuticAreas, 'socialMediaInformations' => $socialMediaInformations]);
    }
}
