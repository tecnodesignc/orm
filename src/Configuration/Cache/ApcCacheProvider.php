<?php

namespace Tecnodesignc\ORM\Configuration\Cache;

class ApcCacheProvider extends IlluminateCacheProvider
{
    /**
     * @var string
     */
    protected $store = 'apc';
}
