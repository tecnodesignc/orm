<?php

namespace Tecnodesignc\ORM\Serializers;

trait Arrayable
{
    /**
     * @return string
     */
    public function toArray()
    {
        return (new ArraySerializer)->serialize($this);
    }
}
