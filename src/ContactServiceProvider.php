<?php

namespace Ranjeet\MyContactPackage;
use Illuminate\Support\ServiceProvider;
class ConatctServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'mycontactpackage');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }
    
    public function register()
    {
        
    }
}
