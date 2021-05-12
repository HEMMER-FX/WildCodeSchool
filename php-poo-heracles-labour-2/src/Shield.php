<?php

class Shield
{
    private int $protection;
    private string $image;


    public function __construct(
        int $protection = 10,
        string $image = 'shield.svg'
    ) {
        $this->protection = $protection;
        $this->image = $image;
    }

    public function getProtection()
    {
        return $this->protection;
    }

    public function getImage()
    {
        return 'assets/images/' . $this->image;
    }

    public function setProtection($protection)
    {
         $this->getProtection = $protection;
    }
  
    public function setImage($image)
    {
         $this->getImage = $image;
    }

}