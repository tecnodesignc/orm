<?php

namespace Tecnodesignc\ORM\Facades;

use Illuminate\Support\Facades\Facade;
use Tecnodesignc\ORM\DoctrineManager;

class Doctrine extends Facade
{
    /**
     * Get the registered name of the component.
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return DoctrineManager::class;
    }
}
