<?php

class CreditCard {

    protected $creditCardNumber;
    protected $isValid;
    protected $message;

    public function __construct($_creditCardNumber, $_isValid) {
        $this->setCreditCardNumber($_creditCardNumber);
        $this->setIsValid($_isValid);
        $this->setMessage();
    }

    public function getCreditCardNumber()
    {
        return $this->creditCardNumber;
    }

    public function setCreditCardNumber($creditCardNumber)
    {
        $this->creditCardNumber = $creditCardNumber;

        return $this;
    }

    public function getIsValid()
    {
        return $this->IsValid;
    }

    public function setisValid($isValid)
    {
        $this->isValid = $isValid;

        return $this;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage()
    {

        if($this->isValid === true) {
            $this->message = 'Puoi acquistare il prodotto';
        }
        else {
            $this->message = 'Attenzione! La tua carta di credito è scaduta';
        }

        return $this;
    }
}
?>