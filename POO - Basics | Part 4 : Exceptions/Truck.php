<?php
require_once 'Vehicle.php';


class Truck extends Vehicle
{

    protected int $stockCapacity;
    protected int $chargement = 0;


    public function __construct(string $color, int $nbSeats, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->stockCapacity = $stockCapacity;
    }

    public function isFull(){
        if ($this->getStockCapacity() > 0){
            echo "in filling";
        }elseif ($this->getStockCapacity() <= 0){
            echo "full";
        }
    }


    public function getChargement(): int
    {
        return $this->chargement;
    }
    public function setChargement(int $chargement): void
    {
        $this->chargement = $chargement;
    }

    public function getStockCapacity():int {
        return $this->stockCapacity;
    }

    public function setStockCapacity(int $stockCapacity): void
    {
        $this->stockCapacity = $stockCapacity;
    }
}
