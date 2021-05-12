<?php

require_once 'Vehicle.php';
class Truck extends Vehicle
{
    private int $capacity;
    private int $stock = 0;
    private string $energy;

    public function __construct(string $color, int $nbSeats, int $capacity, int $stock, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setCapacity($capacity);
        $this->setStock($stock);
        $this->setEnergy($energy);
    }

    public function getCapacity():int
    {
        return $this->capacity;
    }
    public function setCapacity(int $capacity):void
    {
        $this->capacity= $capacity;
    }
    public function getStock():int
    {
        return $this->stock;
    }
    public function setStock(int $stock):void
    {
        $this->capacity = $stock;
    }
    public function setEnergy(string $energy):void
    {
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function charging():string
    {
        if($this->stock >= 1000){
            $loading="full";
            return $loading;
        }
        else{
            $loading="in filling";
            return $loading;
        }
    }
}