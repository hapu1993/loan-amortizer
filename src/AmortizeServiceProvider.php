<?php

namespace Hapu\LoanAmortizer;

use Illuminate\Support\ServiceProvider;

class AmortizeServiceProvider extends ServiceProvider{


    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','amortize');
//        $this->app->singleton('amortizer', function ($app) {
//            return new Amortizer;
//        });
//        $this->app->bind(Amortizer::class, function() {
//            return new Amortizer;
//        });
        $this->app->bind('amortizer',function(){
            return new Amortizer();
        });
    }

    public function register()
    {
//        $this->app->bind(Amortizer::class, function() {
//            return new Amortizer;
//        });
        $this->app->bind('amortizer',function(){
            return new Amortizer();
        });
    }

}
