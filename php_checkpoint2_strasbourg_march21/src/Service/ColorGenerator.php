<?php

namespace App\Service;

use App\Model\CupcakeManager;

class ColorGenerator
{
    public function generateColor(array $colors)
    {
        $red=0;
        $green=0;
        $blue=0;
        foreach ($colors as $color) {
            $red += hexdec(substr($color, 1, 2));
            $green += hexdec(substr($color, 3, 2));
            $blue += hexdec(substr($color, 5, 2));
        }
        $count = count($colors);
        $result = '#' . dechex($red / $count) . dechex($green / $count) . dechex($blue / $count);

        return $result;
    }
    public function invertColor($colors)
    {
        $red = 0;
        $green = 0;
        $blue = 0;
        foreach ($colors as $color) {
            $red += hexdec(substr($color, 1, 2));
            $green += hexdec(substr($color, 3, 2));
            $blue += hexdec(substr($color, 5, 2));
        }
        $count = count($colors);
        $newRed = (255 - $red) / $count;
        $newGreen = (255 - $green) / $count;
        $newBlue = (255 - $blue) / $count;

        $result = '#' . dechex($newRed) . dechex($newGreen) . dechex($newBlue);

        return $result;
    }
}
