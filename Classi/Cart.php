<?php

class Cart
{
    private $products = [];

    public function addProduct(...$product)
    { 
        array_push($this->products, ...$product);
    }

    public function getProducts()
    {
        return $this->products;
    }
}  
?>