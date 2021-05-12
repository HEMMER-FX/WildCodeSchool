<?php
include'./header.php';

// J'execute ma requete SELECT de ma table story
$allStories = $pdo->query("SELECT * FROM story")->fetchAll();

// Boucler sur mon table $allStories qui contient toutes les stories et je les affiche
foreach ($allStories as $story)
{
    // Pour chaque ligne de mon tableau, j'affiche les infos récupérés de ma table et je rajoute 2 options (Modifier et Supprimer)
    echo $story['title'].' --- '.$story['content'].' --- '.$story['author'].' <a href="updatestory.php?id='.$story['id'].'">✏️</a> <a href="deletestory.php?id='.$story['id'].'">🗑️</a> <br/>';
}

