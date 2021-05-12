<?php 

class Weapon
{
    private int $damage;
    private string $image;

    public function __construct(
        int $damage = 10,
        string $image = 'sword.svg'
    ) {
        $this->damage = $damage;
        $this->image = $image;
    }

    public function getDamage()
    {
        return $this->damage;
    }
    
    public function getImage()
    {
        return 'assets/images/' . $this->image;
    }

    public function setDamage($damage)
    {
        $this->getDamage = $damage;
    }

    public function setImage($image)
    {
        $this->getImage = $image;
    }
}