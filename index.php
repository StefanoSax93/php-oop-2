<?php 
require_once 'Classi/Products.php';
require_once 'Classi/Food.php';
require_once 'Classi/Customer.php';
require_once 'Classi/Accessory.php';
require_once 'Classi/Toy.php';

$food1 = new Food('Croccantini', "6$");
$food2 = new Food('Carne in scatola', "4$");
$accessory1 = new Accessory('Cuccia', "20$", 'legno', 'marrone');
$accessory2 = new Accessory('Collare', "5$", 'plastica', 'nero');
$toy1 = new Toy('Osso', "3$", 'gomma', 'rosso', '400g');
$toy2 = new Toy('Pallina da tennis', "0.20$", 'gomma', 'giallo', '20g');
$customer1 = new Customer('John Marston', 'johnthekiller@gmail.com','thekiller', true);
$customer2 = new Customer('Arthur Morgan', 'arthurmorgan@gmail.com','thesick:(', false);

echo "<h1 class='text-uppercase'>" . $food1->getType() . "</h1>";
var_dump($food1);
var_dump($food2);

echo "<h1 class='text-uppercase'>" . $toy1->getType() . "</h1>";
var_dump($toy1);
var_dump($toy2);

echo "<h1 class='text-uppercase'>" . $accessory1->getType() . "</h1>";
var_dump($accessory1);
var_dump($accessory2);

echo "<h1 class='text-uppercase'>Utenti</h1>";
var_dump($customer1);
var_dump($customer2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce </title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous'/>
</head>
<body>
    
</body>
</html>