<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

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

        $this->mapSchoolCollegeVersityRoutes();

        $this->mapSchoolCollegeVersityRoutes();

        $this->mapStudentRoutes();

        $this->mapIndividualRoutes();

        $this->mapWelfareRoutes();

        $this->mapInstitutionRoutes();

        //
    }    
    
    /**
     * Define the "institution" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapInstitutionRoutes()
    {
        Route::prefix('institution')
             ->middleware(['web'])
             ->namespace($this->namespace)
             ->group(base_path('routes/institution.php'));
    }    
    
    /**
     * Define the "welfare" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapWelfareRoutes()
    {
        Route::prefix('welfare')
             ->middleware(['web'])
             ->namespace($this->namespace)
             ->group(base_path('routes/welfare.php'));
    }    
    
    /**
     * Define the "individual" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapIndividualRoutes()
    {
        Route::prefix('individual')
             ->middleware(['web'])
             ->namespace($this->namespace)
             ->group(base_path('routes/individual.php'));
    }    
    
    /**
     * Define the "student" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapStudentRoutes()
    {
        Route::prefix('student')
             ->middleware(['web'])
             ->namespace($this->namespace)
             ->group(base_path('routes/student.php'));
    }    
    
    /**
     * Define the "school_college_versity" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
   
    /**
     * Define the "school_college_versity" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapSchoolCollegeVersityRoutes()
    {
        Route::prefix('schoolcollegeversity')
             ->middleware(['web'])
             ->namespace($this->namespace)
             ->group(base_path('routes/schoolcollegeversity.php'));
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
            ->as('api.')
            ->namespace($this->namespace."\\API")
            ->group(base_path('routes/api.php'));   
    }
}
