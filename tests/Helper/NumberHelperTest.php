<?php
/**
 * @author  Roberto Rielo <roberto910907@gmail.com>.
 *
 * @version Exercise v1.0 07/02/18 09:17 PM
 */

namespace Test\Helper;

use App\Helper\NumberHelper;
use PHPUnit\Framework\TestCase;

class NumberHelperTest extends TestCase
{
    /**
     * @dataProvider digitsSumProvider
     *
     * @param $number
     * @param $digitSum
     */
    public function testDigitsSum($number, $digitSum)
    {
        $this->assertEquals(NumberHelper::digitSum($number), $digitSum);
    }

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

    public function digitsSumProvider()
    {
        return [
            [18, 9],
            [5, 5],
            [17, 8],
            [12, 3],
            [1, 1],
        ];
    }
}
