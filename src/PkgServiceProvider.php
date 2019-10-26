<?php
namespace Biplab\Bspkg;

use Illuminate\Support\ServiceProvider;

class PkgServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

    }

    public function register()
    {

    }
}
