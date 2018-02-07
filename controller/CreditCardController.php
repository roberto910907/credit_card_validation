<?php

use model\CreditCard;

class CreditCardController
{
    /**
     * Render the credit card validation view
     *
     * @return string
     */
    public function renderCreditCardView()
    {
        return (include '../view/validation_view.php');
    }

    /**
     * Main method for validating a credit card object
     *
     * @param CreditCard $creditCard
     *
     * @return bool
     */
    public function validateCreditCard(CreditCard $creditCard)
    {
        return $this->isValidCreditCardNumber($creditCard->getCardNumber());
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

        echo "valid card";
    }
}