<?php
/**
 * @author  Roberto Rielo <roberto910907@gmail.com>.
 * @version Exercise v1.0 07/02/18 01:15 AM
 */

namespace App\Validator;

use App\Helper\NumberHelper;
use App\Helper\StringHelper;
use App\Validator\Interfaces\ValidatorInterface;

class CreditCardValidator implements ValidatorInterface
{
    const DEFAULT_CARD_LENGTH = 16;

    /**
     * @param string $creditCardNumber
     *
     * @return bool
     */
    public function validate($creditCardNumber)
    {
        $digitsSum = 0;

        // Check if number is not null, blank or length is not 16
        if (null === $creditCardNumber || '' === $creditCardNumber || self::DEFAULT_CARD_LENGTH !== strlen($creditCardNumber)) {
            return false;
        }

        $reversedCreditCardNumber = StringHelper::stringToCharArray($creditCardNumber, true);

        foreach ($reversedCreditCardNumber as $index => $number) {
            // If the array index is odd double the digit value, else cast digit into "int" type, in order to standardize the array
            $number = NumberHelper::isOdd($index) ? $number * 2 : (int)$number;
            $digitsSum += NumberHelper::digitSum($number);
        }

        return 0 !== $digitsSum && 0 === $digitsSum % 10;
    }
}