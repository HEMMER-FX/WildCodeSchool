<?php
    include'header.php';

    echo 'Hello fellowshop';
    echo "<br>";
    $ringBearer = 'Frodon';
    $creatorOfRing = "FRANCOIS";
    $numberOfCompagnieOfTheRing = 7;
    $fingerRing = false;
    if($fingerRing==true){
        echo 'L\'anneau est au doigts';
    }else{
        echo 'L\'anneau n\'est pas au doigt <br>';
    }

    $ringBearer = "Sam" ;
    echo $ringBearer;
    echo "<br>";
    $numberOfCompagnieOfTheRing = $numberOfCompagnieOfTheRing + 1;
    echo $numberOfCompagnieOfTheRing;
    echo "<br>";
    $middleEarth = "";
    echo $middleEarth;
    echo "<br>";
    echo "Le nom du porteur est " . $ringBearer;
    echo "<br>";
    $nameOfBearer = "L'anneau est porté par " . $ringBearer;
    echo $nameOfBearer . "<br>"; 

    $nameOfBearer = $nameOfBearer . " et " . $creatorOfRing . " le recherche";

    echo $nameOfBearer . "<br>";

    $wizard = 'Gandalf';
    require'wizard.php';
    include'footer.php';
?>