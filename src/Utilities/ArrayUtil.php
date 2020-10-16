<?php

namespace Tecnodesignc\ORM\Utilities;

/**
 * @deprecated Use the null coalescing operator
 */
class ArrayUtil
{
    public static function get(&$var, $default = null)
    {
        return isset($var) ? $var : $default;
    }
}
