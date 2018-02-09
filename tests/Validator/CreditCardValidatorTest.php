<?php
/**
 * @author  Roberto Rielo <roberto910907@gmail.com>.
 *
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

    public function testNullIsInvalid()
    {
        $this->assertFalse($this->creditCardValidator->validate(null));
    }

    public function testEmptyStringIsInvalid()
    {
        $this->assertFalse($this->creditCardValidator->validate(''));
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

    /**
     * List of valid credit card numbers.
     *
     * @source http://credit-card-generator.2-ee.com/q_valid-working-credit-card-numbers.htm
     */
    public function validCreditCardNumberProvider()
    {
        return [
            ['4485699154090711'],
            ['5122156505424632'],
            ['4929870103821308'],
            ['4024007128118261'],
        ];
    }

    /**
     * List of invalid credit card numbers.
     */
    public function invalidCreditCardNumberProvider()
    {
        return [
            ['435345345234'],
            ['323423423423345341'],
            ['0000000000000000'],
            ['492987010382130'],
        ];
    }
}
