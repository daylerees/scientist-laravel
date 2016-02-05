<?php

namespace Scientist\Laravel;

use Scientist\Laboratory;
use Illuminate\Support\ServiceProvider;

/**
 * Class ScientistServiceProvider
 *
 * @package \Scientist\Laravel
 */
class ScientistServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(['scientist', Laboratory::class], function () {
            return new Laboratory;
        });
    }
}
