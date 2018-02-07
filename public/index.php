<?php
/**
 * Implementing front controller design pattern
 *
 * @author  Roberto Rielo <roberto910907@gmail.com>.
 * @version Exercise v1.0 06/02/18 23:35 PM
 */

include '../controller/CreditCardController.php';
include '../helper/ObjectHelper.php';
include '../validator/CreditCardValidator.php';

$creditCardValidator = new CreditCardValidator();

/* Simulating Dependency Injection when objects are created and provided to class, now it's easy to be changed to a different one */
$controller = new CreditCardController($creditCardValidator);
$objectHelper = new \helper\ObjectHelper();

if ($_POST) {
    return $controller->validateCreditCard($objectHelper::createObjectFromPOST($_POST));
}

return $controller->renderCreditCardView();
