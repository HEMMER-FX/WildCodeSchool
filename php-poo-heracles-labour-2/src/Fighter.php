<?php

class Fighter
{
    public const MAX_LIFE = 100;

    private string $name;

    private int $strength;
    private int $dexterity;
    private string $image;
    private ?Weapon $weapon;
    private ?Shield $shield;

    private int $life = self::MAX_LIFE;
    
    public function __construct(
        string $name,
        int $strength = 10,
        int $dexterity = 5,
        string $image = 'fighter.svg',
        Weapon $weapon = null,
        Shield $shield = null
        
    ) {
        $this->name = $name;
        $this->strength = $strength;
        $this->dexterity = $dexterity;
        $this->image = $image;
        $this->weapon = $weapon;
        $this->shield = $shield;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }



    public function fight(Fighter $adversary): void
    {
        $damage = rand(1, $this->getDamage()) - $adversary->getDefense();
        if ($damage < 0) {
            $damage = 0;
        }
        $adversary->setLife($adversary->getLife() - $damage);
    }


    /**
     * Get the value of life
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Set the value of life
     *
     * @return  self
     */
    public function setLife($life)
    {
        if($life < 0) {
            $life = 0;
        }
        $this->life = $life;

        return $this;
    }

    public function isAlive(): bool
    {
        return $this->getLife() > 0;
    }

    /**
     * Get the value of strength
     */
    public function getStrength()
    {
        return $this->strength;
    }
    /**
     * get the value weapon
     */
    public function getWeapon()
    {
        return $this->weapon;
    }

     /**
     * get the value shield
     */
    public function getShield()
    {
        return $this->shield;
    }

    /**
     * Get all damage
     */
    public function getDamage()
    {
        //return $this->getWeapon() ? $this->getStrength() + $this->getWeapon()->getDamage() : $this->getStrength();
        if($this->getWeapon())
        {
            return $this->getStrength() + $this->getWeapon()->getDamage();
        }else{
            return $this->getStrength();
        }
    }

    /**
     * Get all defense
     */
    public function getDefense()
    {
        return $this->getShield() ? $this->getDexterity() + $this->getShield()->getProtection() : $this->getDexterity();
    }
/*
    public function getDefense()
    {
        if($this->getShield()){
            return $this->getDexterity() + $this->getShield()->getProtection();
        }else{
            return $this->getDexterity();
        }
    }
*/

    /**
     * Set the value of strength
     *
     * @return  self
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }

    /**
     * Get the value of dexterity
     */
    public function getDexterity()
    {
        return $this->dexterity;
    }

    /**
     * Set the value of dexterity
     *
     * @return  self
     */
    public function setDexterity($dexterity)
    {
        $this->dexterity = $dexterity;

        return $this;
    }

    /**
     * Set a value weapon
     */
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;

        return $this;
    }

    /**
     * Set a value weapon
     */
    public function setShield($shield)
    {
        $this->shield = $shield;

        return $this;
    }
}