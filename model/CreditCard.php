<?php
/**
 * @author  Roberto Rielo <roberto910907@gmail.com>.
 * @version Exercise v1.0 06/02/18 11:29 PM
 */

class CreditCard
{
    private $cardNumber;
    private $holderName;
    private $expirationDate;

    public function __construct($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * @return mixed
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @param mixed $cardNumber
     *
     * @return CreditCard
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param mixed $expirationDate
     *
     * @return CreditCard
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHolderName()
    {
        return $this->holderName;
    }

    /**
     * @param mixed $holderName
     *
     * @return CreditCard
     */
    public function setHolderName($holderName)
    {
        $this->holderName = $holderName;

        return $this;
    }
}