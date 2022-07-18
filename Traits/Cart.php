<?php

trait Cart
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

    public function getCartTotal($discount = 0)
    {
        $total  = 0;

        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        
        return $total;
    }

    public function checkout($paymentIndex)
    {
        $total = $this->getCartTotal();

        $discount = $this->registeredStatus ? 20 : 0;

        $totalWithDiscount = $total - ($total * $discount / 100);

        $method = $this->getMethod($paymentIndex);

        if($method->checkExpiration()) {
            echo "Pagamento riuscito per un totale di " . $totalWithDiscount . "€";
        } else {
            echo "Pagamento fallito perchè la carta è scaduta il " . $method->getExpiration();
        }
    }
}  
?>