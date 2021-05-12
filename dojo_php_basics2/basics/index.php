<?php
/*
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

    */


    //--------------------php dojo 2 ------------------
    //Affiche de 0 à 9 inclus via une boucle

    for($i=0 ; $i< 10 ; $i++){
        echo $i. " - ";
    }
    echo "<br>";

    //Affiche de 0 à 10 inclus via une boucle
    for($a=0 ; $a < 11 ; $a++){
        echo $a. " - ";
    }
    echo "<br>";

    //Affiche de 1 à 10 inclus via une boucle
    for($z = 1 ; $z < 11 ; $z++){
        echo $z. " - ";
    }
    echo "<br>";

    //Affiche de 10 à 0 inclus via une boucle
    for($e = 10 ; $e != -1 ; $e--){         // peut aussi faire for($e = 10 ; $e>= 0 $e--)
        echo $e. " - ";
    }
    echo "<br>";

    //Affiche de 25 à 50 inclus, tous les 5
    for($r = 25 ; $r != 75 ; $r+= 5){
        echo $r. " - ";
    }
    echo "<br>";

    //Affiche les valeurs possibles entre 10 à -10, tous les 3
    for($t = 10 ; $t > -10 ; $t-= 3){
        echo $t. " : ";
    }
    echo "<br>";

    // ------------------ les conditions -------------
    echo "<h1> Les conditions ! </h1>";
    $name = 'Darth Vader';
    if($name === 'Darth Vader' || $name === 'Darth Sidious'){
        echo "Sith";
    } elseif ($name === 'Yoda') {
        echo "Jedi";
    } else {
        echo "Sans doute une personne sans pouvoir";
    }

    // ----------------- tableau indexé -----------
    echo "<h1> Tableau indexé </h1>";

    $jedis = ['Obi-Wan Kenobi', 'Yoda', 'Luke Skywalker', 'Windu', 'Qui-gon Jinn'];
    $jedis [] = 'Rey';          // pour pousser dans le tableau array_push($jedi,'Rey');    le $jedi est le tableau dans lequel il doit entrer et rey la valeur 
    echo $jedis[1];
    echo "<br>";
    foreach ($jedis as $nameOfJedis) {      // dans le tableau $jedis tu prends dans chaque ligne
        echo $nameOfJedis . " + ";
    }

    // ----------------tableau associatif --------------
    echo "<h1> Les tableaux associatifs </h1>";

    $boardOfjedis = [

    'Yoda' => 900,                      // tout ce quil y  a gauche c'est la clé et à droite la valeur !
    'Leia' => 19,                       // Leia est la clé et 19 la valeur 
    'Luke Skywalker' => 19,
    'Darth Vader' => 46,
    'Chewbacca' => 200
    ];

    $boardOfjedis ['Han solo']= 29;     // on peut aussi écrire $boardOfjedis += ['Han Solo' => 29];

    
    asort($boardOfjedis);           
    echo "<br>";
    foreach ($boardOfjedis as $name_jedis => $age_jedis) {
        echo "<li> Le jedis :  $name_jedis  a  $age_jedis  ans </li>";
    }
    
    echo "<br><br>";

    ksort($boardOfjedis);               // il trie part rapport au clé
    echo "<br>";
    foreach ($boardOfjedis as $name_jedis => $age_jedis) {
        echo "<li> Le jedis :  $name_jedis  a  $age_jedis  ans </li>";
    }
    
    echo "<br><br>";

    echo "<br>";
    foreach ($boardOfjedis as $name_jedis => $age_jedis) {
        if($age_jedis > 100){
            echo "<li> Le jedis :  $name_jedis  a  $age_jedis  ans </li>";
        }
    }
    /* ---------------- tableaux multidimensionnelles -----------------
*/

    $boardRace = [

    'Jedi' => ['Luke Skywalker', 'Yoda', 'Windu'],
    'Sith' => ['Darth Vader', 'Darth Maul', 'Dooku'],
    'Gungan' => ['Jar Jar Binks'],
    'Human' => ['Han Solo', 'Leia']
    ];

    foreach ($boardRace as $race => $name) {
        echo "<h2> Dans la race \" $race \"il y a :</h2>";
        foreach ($name as $namePerson) {
            echo "<li> $namePerson . </li>";
        }
    }
    
    echo "<br>";
    foreach ($boardRace as $race =>$name) {
        echo "<li> $race et il y a :</li>";
        echo count($name)." personnes à l'intérieure de ce putain de groupe";
        
    }
?>