<?php

namespace App\Providers;
use Schema;
use View;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); //NEW: Increase StringLength
        $age=Carbon::createFromDate(1995,02,11)->age;
        View::share('age',$age);
        View::share('myname','Ahmed');
        
        View::composer('*',function($view){
            $view->with('auth',Auth::user());
            
        });
        Log::debug(Auth::user());
    }
}
