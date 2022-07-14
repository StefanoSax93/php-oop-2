<?php 

require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/CreditCard.php';

class Customer extends CreditCard {
    
    protected $userName;
    protected $email;
    private $password;
    protected $registeredStatus = false;
    protected $discount = 0;

    public function __construct($_userName, $_email, $_password, $_registeredStatus,$_creditCardNumber, $_isValid) {
        $this->setUserName($_userName);
        $this->setEmail($_email);
        $this->setPassword($_password);
        $this->setRegisteredStatus($_registeredStatus);
        $this->setDiscount();
        parent::__construct($_creditCardNumber, $_isValid);
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function setPassword($password)
    {
        $this->password = hash("md5",$password);

        return $this;
    }

    public function setRegisteredStatus($registeredStatus)
    {
        $this->registeredStatus = $registeredStatus;

        return $this;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount()
    {   
        if($this->registeredStatus === true) {
            $this->discount = 0.2;
        }

        return $this;
    }
}

?>