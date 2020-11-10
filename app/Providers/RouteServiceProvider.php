<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    protected $namespaceAdmin = 'App\Http\Controllers\Admin';
    protected $namespaceLabo = 'App\Http\Controllers\Labo';
    protected $namespaceInternal = 'App\Http\Controllers\Internal';
    protected $namespaceExternal = 'App\Http\Controllers\External';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/admin';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapAdminRoutes();
        $this->mapLaboRoutes();
        $this->mapInternalRoutes();
        $this->mapExternalRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    protected function mapAdminRoutes()
    {
        Route::middleware('web', 'auth')
            ->namespace($this->namespaceAdmin)
            ->prefix("admin")
            ->group(base_path('routes/admin.php'));
    }

    protected function mapLaboRoutes()
    {
        Route::middleware('web', 'auth')
            ->namespace($this->namespaceLabo)
            ->prefix("laboratorista")
            ->group(base_path('routes/labo.php'));
    }

    protected function mapInternalRoutes()
    {
        Route::middleware('web', 'auth')
            ->namespace($this->namespaceAdmin)
            ->prefix("interno")
            ->group(base_path('routes/internal.php'));
    }

    protected function mapExternalRoutes()
    {
        Route::middleware('web', 'auth')
            ->namespace($this->namespaceAdmin)
            ->prefix("externo")
            ->group(base_path('routes/external.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
}
