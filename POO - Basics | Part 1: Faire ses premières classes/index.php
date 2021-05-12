<?php
require_once 'bicycles.php';
require_once 'Cars.php';


// instance de vélo
$bike = new Bicycle('blue',18,16,2);
$biker = new Bicycle('red',15,15,15);

//instance de voiture
$alphonse = new Cars('green',5,'fuel');
$roger = new Cars('black',12,'diesel');
var_dump($alphonse);
var_dump($bike);
var_dump($biker);

echo "<ul> <li>" .$alphonse->start() . "</li>" . "<li>" . $alphonse->movingForward() . "</li>" . "<li>" . $alphonse->brake() . "</li></ul>";
echo '<br><br><br><br><br>';
echo "<ul> <li>" . $roger->start() . "</li>" . "<li>" . $roger->movingForward() . "</li>" . "<li>" . $roger->brake() . "</li></ul>";







?>