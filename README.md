[![Scientist](scientist.png)](https://github.com/daylerees/scientist)

# Scientist for Laravel

[![Packagist Version](https://img.shields.io/packagist/v/daylerees/scientist-laravel.svg)](https://packagist.org/packages/daylerees/scientist-laravel)
[![Packagist](https://img.shields.io/packagist/dt/daylerees/scientist-laravel.svg)](https://packagist.org/packages/daylerees/scientist-laravel)

Allow the [Scientist library](https://github.com/daylerees/scientist) to be used with the [Laravel PHP framework](https://laravel.com).

## Installation

Require the latest version of Scientist Laravel using [Composer](https://getcomposer.org/).

    composer require daylerees/scientist-laravel

Next, add the service provider to the `providers` section of `config/app.php` in your Laravel project.

```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        
        Scientist\Laravel\ScientistServiceProvider::class,

    ],
    
];
```

Finally, register the Facade within the `aliases` section of `config/app.php`.


```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'URL'       => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View'      => Illuminate\Support\Facades\View::class,
        
        'Scientist' => Scientist\Laravel\Facade::class,

    ],

];
```

You're good to go!

## Usage

You can access the Scientist Laboratory through the `Scientist` facade.

```php
<?php

$value = Scientist::experiment('foo')
    ->control($controlCallback)
    ->trial('First trial.', $trialCallback)
    ->run();
```

Or, inject the Laboratory into a container resolved class or controller action.

```php
<?php

use Scientist\Laboratory;

class FooController extends Controller
{
    public function index(Laboratory $laboratory)
    {
        return $laboratory->experiment('foo')
            ->control(function() { ... })
            ->trial('First trial.', function() { ... })
            ->run();
    }
}
```

See the Scientist documentation for more information!

Enjoy!
