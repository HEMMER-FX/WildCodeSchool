<?php
require_once "Vehicle.php";

class Car extends Vehicle
{
    private bool $hasParkBrake = true;
    protected string $energy;
    protected int $energyLevel;

    public const  ALLOWED_ENERGIES = [
        "fuel",
        "electric"
    ];

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
            return $this->energy;
    }


    public function getEnergyLevel(): int
    {
            return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    // add function for POO - Basics | Part 4 : Exceptions
    public function getParkBrake():bool
    {
        return $this->hasParkBrake;
    }
    public function setParkBrake()
    {
        $this->hasParkBrake;
    }

    public function start() : string
    {
        if ($this->hasParkBrake)
        {
            throw new Exception("PARKBRAKE ACTIF BORDEL DE FUCKING SHIT");
        }

    }

}
