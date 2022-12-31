<?php
namespace Devatwal\LaravelWebStory;

use Illuminate\Support\ServiceProvider;

class WebStoryServiceProvider extends ServiceProvider {
    
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
    
    public function register()
    {

    }
}