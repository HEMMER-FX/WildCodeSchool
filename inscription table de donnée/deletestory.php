<?php
include'./header.php';

// Je teste l'id de l'enregistrement a supprimer si il est définit alros je supprime
if(isset($_GET['id']) && $_GET['id']<>''){
    $story = $pdo->exec("DELETE FROM story WHERE id=".$_GET['id']);
    header('Location: ./story.php');
}
