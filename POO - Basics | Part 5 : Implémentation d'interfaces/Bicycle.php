<?php
require_once "Vehicle.php";

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOff()
    {
        return false;
    }

    public function switchOn()
    {
        if ($this->getCurrentSpeed > 10) 
        {
            return true;
        }else{
            return false;
        }
    }

}
