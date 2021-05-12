<?php
require_once 'src/Fighter.php';
// First Labour : Heracles vs Nemean Lion
// use your Figher class here

$heroes = new Fighter("Héraclès", 20 , 6);
$heroes2 = new Fighter("Némée", 11 , 13);

echo '<p>' . $heroes->getName() . ' à ' . $heroes->getStrength() . 'points de force et ' . $heroes->getDexterity() . 'points de dextérité ! </p>';


echo '<p>' . $heroes2->getName() . ' arrive avec ses ' . $heroes2->getStrength() . 'points de force et ses ' . $heroes2->getDexterity() . 'points de dextérité !</p>';

echo 'Les points de vie des deux heroes sont :' . Fighter::max_life;