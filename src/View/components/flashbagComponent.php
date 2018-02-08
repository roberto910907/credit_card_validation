<?php

use App\Model\CreditCard;

if (null === $isValid = $this->session->get(CreditCard::IS_VALID_RESULT)) {
    echo "
    <div class='alert alert-primary' role='alert'>
        Please fill a Credit Card Number.
    </div>
        ";
} elseif ($isValid) {
    echo "
    <div class='alert alert-success' role='alert'>
        Valid Credit Card Number. Good Job!
    </div>
        ";
} else {
    echo "
    <div class='alert alert-danger' role='alert'>
        Invalid Credit Card Number. Please Try Again.
    </div>
        ";
}

$this->session->remove(CreditCard::IS_VALID_RESULT);