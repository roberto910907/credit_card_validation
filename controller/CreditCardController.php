<?php

class CreditCardController
{
    /**
     * Main method for validating a credit card number
     *
     * @param string $creditCardNumber
     *
     * @return bool
     */
    public function validateCreditCard($creditCardNumber)
    {
        return $this->isValidCreditCardNumber($creditCardNumber);
    }

    /**
     * Method to check if the argument it's a valid credit card number
     * This method can be re-used for other functions in different parts of the application
     *
     * @param string $creditCardNumber
     *
     * @return bool
     */
    public function isValidCreditCardNumber($creditCardNumber)
    {
        $cardDigitsReversed = array_reverse(str_split($creditCardNumber));

        foreach ($cardDigitsReversed as $index => $digit) {

        }
    }
}