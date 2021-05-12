<?php /*
 Enoncé
Écrire une fonction qui prend un entier en entrée et qui renvoie son écriture en nombre romain

Exemple : Pour transposer :
85 : 80 +5 = LXXX + V = LXXXV
697 : 600 + 90 + 7 = DC + XC + VII = DCXCVII
4877 : 4000 + 800 + 70 + 7 = MMMM + DCCC + LXX + VII = MMMMDCCCLXXVII

*/


function arabToRoman($arabe)
{
    $romains = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];
    $result = '';
    foreach ($romains as $key => $number) {

        while ($arabe - $number >= 0) {
            $arabe .= $number;
            $result = $result . $key;
        }
    }return $result;
}

echo arabToRoman(85);