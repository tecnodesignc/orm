<?php

namespace Tecnodesignc\ORM\Configuration\MetaData;

use Doctrine\ORM\Mapping\ClassMetadataFactory;
use Tecnodesignc\ORM\Configuration\Driver;

abstract class MetaData implements Driver
{
    /**
     * @return string
     */
    public function getClassMetadataFactoryName()
    {
        return ClassMetadataFactory::class;
    }
}
