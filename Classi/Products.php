<?php 

require_once __DIR__ . "../../Traits/Validator.php";

class Products {
    
    use Validator;

    protected $name;
    protected $price;

    function __construct($_name,$_price) {
        $this->setName($_name);
        $this->setPrice($_price);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->validateStrings($name);
        
        $this->name = $name;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}

?>