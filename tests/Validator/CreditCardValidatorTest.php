<?php
/**
 * @author  Roberto Rielo <roberto910907@gmail.com>.
 * @version Exercise v1.0 07/02/18 11:09 AM
 */

namespace Test\Validator;

use App\Validator\CreditCardValidator;
use PHPUnit\Framework\TestCase;

class CreditCardValidatorTest extends TestCase
{
    /* @var CreditCardValidator */
    private $creditCardValidator;

    public function setUp()
    {
        $this->creditCardValidator = new CreditCardValidator();
    }

    /**
     * @dataProvider validCreditCardNumberProvider
     *
     * @param $creditCardNumber
     */
    public function testValidCreditCardNumbers($creditCardNumber)
    {
        $this->assertTrue($this->creditCardValidator->validate($creditCardNumber));
    }

    /**
     * @dataProvider invalidCreditCardNumberProvider
     *
     * @param $creditCardNumber
     */
    public function testInvalidCreditCardNumbers($creditCardNumber)
    {
        $this->assertFalse($this->creditCardValidator->validate($creditCardNumber));
    }

    public function validCreditCardNumberProvider()
    {
        return [
            ['4353453452342343258'],
            ['3234234234233453488'],
            ['3455464564562345234'],
        ];
    }

    public function invalidCreditCardNumberProvider()
    {
        return [
            ['435345345234'],
            ['32342342342334534'],
            ['345546456456234523'],
        ];
    }
}