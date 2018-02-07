<?php
/**
 * @author  Roberto Rielo <roberto910907@gmail.com>.
 * @version Exercise v1.0 07/02/18 01:15 AM
 */

include 'interfaces/ValidatorInterface.php';

class CreditCardValidator implements ValidatorInterface
{
    /**
     * Validator
     *
     * @param string $creditCardNumber
     *
     * @return bool
     */
    public function validate($creditCardNumber)
    {
        echo "valid card";
    }
}