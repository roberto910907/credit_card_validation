<?php

namespace helper;
/**
 * @author  Roberto Rielo <roberto910907@gmail.com>.
 * @version Exercise v1.0 06/02/18 05:02 PM
 */

abstract class NumberHelper
{
    /**
     * @param int $number
     *
     * @return bool
     */
    public static function isOdd($number)
    {
        return 0 !== $number % 2;
    }
}