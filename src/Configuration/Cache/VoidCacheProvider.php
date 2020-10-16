<?php

namespace Tecnodesignc\ORM\Configuration\Cache;

use Doctrine\Common\Cache\VoidCache;
use Tecnodesignc\ORM\Configuration\Driver;

class VoidCacheProvider implements Driver
{
    /**
     * @param array $settings
     *
     * @return VoidCache
     */
    public function resolve(array $settings = [])
    {
        return new VoidCache();
    }
}
