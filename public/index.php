<?php
/**
 * Implementing front controller design pattern
 *
 * @author  Roberto Rielo <roberto910907@gmail.com>.
 * @version Exercise v1.0 06/02/18 23:35 PM
 */

require __DIR__.'/../vendor/autoload.php';

use controller\CreditCardController;
use validator\CreditCardValidator;
use helper\ObjectHelper;

$creditCardValidator = new CreditCardValidator();

/* Simulating Dependency Injection when objects are created and provided to class, now it's easy to be changed to a different one */
$controller = new CreditCardController($creditCardValidator);

if ($_POST) {
    return $controller->validateCreditCard(ObjectHelper::createObjectFromPOST($_POST));
}

return $controller->renderCreditCardView();
