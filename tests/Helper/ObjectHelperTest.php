<?php
/**
 * @author  Roberto Rielo <roberto910907@gmail.com>.
 * @version Exercise v1.0 07/02/18 09:30 PM
 */

namespace Test\Helper;

use App\Helper\ObjectHelper;
use PHPUnit\Framework\TestCase;

class ObjectHelperTest extends TestCase
{

    public function testObjectCreationFromPOST()
    {
        $_POST_DATA = ['cardNumber' => '864645456456465465', 'month' => 'january', 'year' => 2017, 'cvv' => '487'];

        $creditCardObject = ObjectHelper::createObjectFromPOST($_POST_DATA);

        $this->assertEquals($_POST_DATA['cardNumber'], $creditCardObject->getCardNumber());
        $this->assertEquals($_POST_DATA['month'] . ' - ' . $_POST_DATA['year'], $creditCardObject->getExpirationDate());
        $this->assertEquals($_POST_DATA['cvv'], $creditCardObject->getCvv());
    }
}