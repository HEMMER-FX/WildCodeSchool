<?php


class Vehicle
{
    //Attributs
    protected string $color;
    protected int $currentSpeed;
    protected int $nbSeats = 1;
    protected int $nbWheels = 2;

    //methodes
    public function __construct(string $color, int $nbSeats)
    {
        $this->nbSeats = $nbSeats;
        $this->color= $color;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }


    public function getNbSeats():int
    {
        return $this->nbSeats;
    }


    public function getNbWheels() :int
    {
        return $this->nbWheels;
    }


    public function getColor() : string
    {
        return $this->color;
    }


    public function getCurrentSpeed() :int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed)
    {
        if ($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }


    public function setNbSeats(int $nbSeats)
    {
        $this->nbSeats = $nbSeats;
    }

    public function setNbWheels(int $nbWheels)
    {
        $this->nbWheels = $nbWheels;
    }


}
