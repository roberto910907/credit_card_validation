<?php
/**
 * @author  Roberto Rielo <roberto910907@gmail.com>.
 * @version Exercise v1.0 08/02/18 05:42 PM
 */

namespace Test\Helper;

use App\Helper\StringHelper;
use PHPUnit\Framework\TestCase;

class StringHelperTest extends TestCase
{
    /**
     * @dataProvider stringCharArrayProvider
     *
     * @param $string
     * @param $charArrayResult
     */
    public function testStringToCharArray($string, $charArrayResult)
    {
        $this->assertEquals(StringHelper::stringToCharArray($string), $charArrayResult);
    }

    /**
     * @dataProvider stringCharArrayReverseProvider
     *
     * @param $string
     * @param $charArrayResult
     */
    public function testStringToCharArrayReverse($string, $charArrayResult)
    {
        $this->assertEquals(StringHelper::stringToCharArray($string, true), $charArrayResult);
    }

    public function stringCharArrayProvider()
    {
        return [
            ['672252323', ['6', '7', '2', '2', '5', '2', '3', '2', '3']],
            ['36789', ['3', '6', '7', '8', '9']],
            ['512398001', ['5', '1', '2', '3', '9', '8', '0', '0', '1']],
        ];
    }

    public function stringCharArrayReverseProvider()
    {
        return [
            ['672252323', ['3', '2', '3', '2', '5', '2', '2', '7', '6']],
            ['36789', ['9', '8', '7', '6', '3']],
            ['512398001', ['1', '0', '0', '8', '9', '3', '2', '1', '5']],
        ];
    }
}