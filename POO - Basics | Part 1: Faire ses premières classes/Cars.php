<?php
// class CARS

class Cars
/*************************** PROPRIETE ******************************/
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

/*************************** CONSTRUCT *****************************/
    public function __construct(string $color,int $nbSeats,string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
/*************************** METHOD *********************************/
    public function start():string
    {
        $startCar= " Starting the car ";
        return $startCar;
    }

    public function movingForward():string
    {
        $this->currentSpeed = 20;
        return "The car is moving";
    }

    public function brake():string
    {
        $sentence = "";
        while ($this->currentSpeed > 0)
        {
            $this->currentSpeed--;
            $sentence.="Brake !!!";
        }
        $sentence .="I'm stopped !";
        return $sentence;
    }
    public function getColor():string
    {
        return $this->color;
    }
    public function setColor(string $color):void
    {
        $this->color = $color;
    }
    public function getNbSeats():int
    {
        return $this->nbSeats;
    }
    public function setNbSeats(int $nbSeats):void
    {
        $this->color = $nbSeats;
    }
    public function getEnergy():string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy):void
    {
        $this->color = $energy;
    }
}