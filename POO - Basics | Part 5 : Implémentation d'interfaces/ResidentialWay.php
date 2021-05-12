<?php
require_once "HighWay.php";
require_once "Vehicle.php";
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';


final class ResidentialWay extends HighWay
{

    protected int $maxSpeed = 50;
    protected int $nbLane= 2;


    public function addVehicle(Vehicle $obj) : string
    {
        $this->setCurrentVehicles($obj);
        return 'vehicle added';
    }
}
