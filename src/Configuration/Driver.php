<?php

namespace Tecnodesignc\ORM\Configuration;

interface Driver
{
    /**
     * @param array $settings
     *
     * @return mixed
     */
    public function resolve(array $settings = []);
}
