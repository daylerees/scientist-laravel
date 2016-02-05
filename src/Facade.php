<?php

namespace Scientist\Laravel;

use Scientist\Laboratory;
use Illuminate\Support\Facades\Facade as BaseFacade;

/**
 * Class Facade
 *
 * @package \Scientist\Laravel
 */
class Facade extends BaseFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Laboratory::class;
    }
}
