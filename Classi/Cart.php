<?php

class Cart
{
    private $products = [];

    public function addProduct($product)
    { 
    $this->products[] = $product;
    }

    public function getProducts()
    {
        return $this->products;
    }
}  
?>