<?php
require_once "MotorWay.php";
require_once "PedestrianWay.php";
require_once "ResidentialWay.php";
require_once "Vehicle.php";
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';


$audi = new Car("black",4,"fuel");

try {
    $audi->start();
}catch (Exception $e)
{
    $audi->setParkBrake();
} finally {
    echo "Ma voiture roule comme une donut";
}
echo "<br>";

$audia4 = new Car("black",3,"fuel");
$errors ="";
if ($audia4 != false){
    $errors = "PARKBRAKE ACTIF FUCKING SHIT ! DON'T DRIVE MF";
    echo "Votre GPS indique " . $errors;

}else{
    $errors = "OK U CAN DRIVE ON THE ROAD!";
    echo "Votre GPS indique " . $errors;
}
