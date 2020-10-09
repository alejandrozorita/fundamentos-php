<?php

namespace App;

/**
 * Class Validate
 *
 * @package App
 */
class Validate
{

    /**
     * @param $value
     *
     * @return bool
     */
    public static function email($value)
    {
        return (bool)filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function url($value)
    {
        return (bool)filter_var($value, FILTER_VALIDATE_URL);
    }

}