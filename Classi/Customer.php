<?php 

require_once __DIR__ . "../../Traits/Cart.php";
require_once __DIR__ . "../../Traits/PaymentHandler.php";


class Customer {
    
    use Cart, PaymentHandler;

    protected $userName;
    protected $email;
    private $password;
    protected $registeredStatus = false;

    public function __construct($_userName = null, $_email, $_password) {

        if (isset($_userName)) {
            $this->register($_userName);
        }

        $this->setEmail($_email);
        $this->setPassword($_password);
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

    
    public function getRegisteredStatus()
    {
        return $this->registeredStatus;
    }

    public function setRegisteredStatus($registeredStatus)
    {
        $this->registeredStatus = $registeredStatus;

        return $this;
    }

    public function register($_userName)
    {
        $this->setUserName($_userName);
        $this->setRegisteredStatus(true);
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

}

?>