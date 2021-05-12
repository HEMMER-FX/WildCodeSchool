<?php
require_once "Vehicle.php";
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

abstract class HighWay
{

    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;


    abstract public function addVehicle(Vehicle $obj);


    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }
    
    public function setCurrentVehicles($currentVehicle): void
    {
        $this->currentVehicles[] = $currentVehicle;
    }

    public function getMaxspeed(): int
    {
        return $this->maxSpeed;
    }
    
    public function setMaxSpeed(int $maxspeed): void
    {
        $this->maxSpeed = $maxspeed;
    }


    public function getNbLane(): int
    {
        return $this->nbLane;
    }
    
    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

}
