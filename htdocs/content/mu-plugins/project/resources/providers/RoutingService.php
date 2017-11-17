<?php

namespace Project\Services;

use Themosis\Facades\Route;
use Themosis\Foundation\ServiceProvider;

class RoutingService extends ServiceProvider
{
    /**
     * Register plugin routes.
     * Define a custom namespace.
     */
    public function register()
    {
        Route::group([
            'namespace' => 'Project\Controllers'
        ], function () {
            require themosis_path('project.resources').'routes.php';
        });
    }
}
