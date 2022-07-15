<?php

trait PaymentHandler

{
    private $paymentMethods = [];

    public function addPaymentMethod($_paymentMethod)
        {
            $this->paymentMethods[] = $_paymentMethod;
    }

    public function getPaymentMethods()
        {
            return $this->paymentMethods;
        }

    public function getMethod($index)
        {
            return $this->getPaymentMethods()[$index];
        }
}