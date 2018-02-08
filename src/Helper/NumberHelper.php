<?php
/**
 * @author  Roberto Rielo <roberto910907@gmail.com>.
 * @version Exercise v1.0 06/02/18 05:02 PM
 */

namespace App\Helper;

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

    /**
     * @param int $number
     *
     * @return int
     */
    public static function digitSum($number)
    {
        // If result is greater than 9 subtract 9 from the number
        return $number <= 9 ? $number : $number - 9;
    }
}