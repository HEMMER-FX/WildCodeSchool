<?php

class Fighter
{
    /* max life idem pour tout les perso */
    const max_life = 100;
    /**
     * @var string
     */
    private string $name;
    private int $strength;
    /**
     * @var int
     */
    private int $dexterity;

    /************** Méthode pour factoriser le code dans index.php **********************/
    public function __construct(string $name, int $strength, int $dexterity)
    {
        $this->name = $name;
        $this->strength = $strength;
        $this->dexterity =$dexterity;
    }

    /************************* NAME ***************************/
    public function getName()
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        return $this->name = $name;
    }
    /************************ FORCE ***************************/
    public function getStrength()
    {
        return $this->strength;
    }
    public function setStrength(int $strength)
    {
        return $this->strength = $strength;
    }
    /**************************** DEXTERITY **********************/
    public function getDexterity()
    {
        return $this->dexterity;
    }
    public function setDexterity(int $dexterity)
    {
        return $this->dexterity = $dexterity;
    }


    public function __toString():string
    {
   return 'test5151';
    }


}
?>