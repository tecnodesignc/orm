<?php

namespace Tecnodesignc\ORM\Configuration\Cache;

class MemcachedCacheProvider extends IlluminateCacheProvider
{
    /**
     * @var string
     */
    protected $store = 'memcached';
}
