<?php

namespace Tecnodesignc\ORM\Configuration\Cache;

use Doctrine\Common\Cache\ArrayCache;
use Tecnodesignc\ORM\Configuration\Driver;

class ArrayCacheProvider implements Driver
{
    /**
     * @param array $settings
     *
     * @return ArrayCache
     */
    public function resolve(array $settings = [])
    {
        return new ArrayCache();
    }
}
