<?php
/**
 * @author  Roberto Rielo <roberto910907@gmail.com>.
 *
 * @version Exercise v1.0 06/02/18 05:05 PM
 */

namespace App\Helper;

abstract class StringHelper
{
    /**
     * @param string $string       String for converting into character array
     * @param bool   $inverseOrder Should the result array be reversed
     *
     * @return array
     */
    public static function stringToCharArray($string, $inverseOrder = false)
    {
        return $inverseOrder ? array_reverse(str_split($string)) : str_split($string);
    }
}
