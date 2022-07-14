<?php 
require_once 'Classi/Products.php';
require_once 'Classi/Food.php';
require_once 'Classi/Customer.php';

$food1 = new Food('Croccantini', "10$");
$customer1 = new Customer('John Marston', 'johnthekiller@gmail.com', true);

var_dump($food1);
var_dump($customer1);

?>