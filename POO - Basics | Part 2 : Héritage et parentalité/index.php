<?php
require_once 'bicycles.php';
require_once 'Car.php';
require_once 'Truck.php';



// instance de vélo
$bike = new Bicycle('blue',18,16,2);
$biker = new Bicycle('red',15,15,15);
$toto = new Bicycle('yellow',1);
var_dump($toto);
//instance de voiture
$alphonse = new Car('green',5,'fuel');
$roger = new Car('black',12,'fuel');
$car = new Car('green', 4, 'electric');

var_dump($alphonse);
var_dump(car::ALLOWED_ENERGIES);

$socaltra = new Truck('white',2,50,1000,'fuel');
var_dump($socaltra);

echo $socaltra->charging() . '<br>';
echo $socaltra->forward() . '<br>';
echo $socaltra->brake();





?>