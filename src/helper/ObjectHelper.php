<?php

namespace helper;

use model\CreditCard;

/**
 * @author  Roberto Rielo <roberto910907@gmail.com>.
 * @version Exercise v1.0 07/02/18 12:31 AM
 */
abstract class ObjectHelper
{
    /**
     * Creating CreditCard object model from $_POST data
     *
     * Using Fluent Interface Design Pattern to build the object
     *
     * @param $_POST_DATA
     *
     * @return CreditCard
     */
    public static function createObjectFromPOST($_POST_DATA)
    {
        return (new CreditCard($_POST_DATA['cardNumber']))
            ->setExpirationDate(sprintf('%s - %s', $_POST_DATA['month'], $_POST_DATA['year']))
            ->setCvv($_POST_DATA['cvv']);
    }
}