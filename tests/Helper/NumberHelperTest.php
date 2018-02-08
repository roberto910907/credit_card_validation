<?php
/**
 * @author  Roberto Rielo <roberto910907@gmail.com>.
 * @version Exercise v1.0 07/02/18 09:17 PM
 */

namespace Test\Helper;

use PHPUnit\Framework\TestCase;
use App\Helper\NumberHelper;

class NumberHelperTest extends TestCase
{
    /**
     * @dataProvider evenNumberProvider
     *
     * @param $number
     */
    public function testEvenNumber($number)
    {
        $this->assertFalse(NumberHelper::isOdd($number));
    }

    /**
     * @dataProvider oddNumberProvider
     *
     * @param $number
     */
    public function testOddNumber($number)
    {
        $this->assertTrue(NumberHelper::isOdd($number));
    }

    public function oddNumberProvider()
    {
        return [
            [1],
            [3],
            [13],
            [77],
            [1001],
        ];
    }

    public function evenNumberProvider()
    {
        return [
            [2],
            [12],
            [44],
            [86],
            [1012],
        ];
    }
}