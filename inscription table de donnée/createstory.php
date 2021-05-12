<?php
include'./header.php';

// Je texte mon formulaire et je sauvegarde dans ma table story
if(isset($_POST['submit']) && $_POST['submit']<>''){
    $sql = "INSERT INTO story VALUES(null, '".$_POST['title']."', '".$_POST['content']."', '".$_POST['author']."')";
    $result = $pdo->exec($sql);
    if($result){
        echo '<h2>Insertion réussie</h2>';
        echo '<img src="https://lesresoteurs.fr/wp-content/uploads/2016/12/lazy-loading-agence-web-marseille-les-resoteurs.png" />';
        echo '<meta http-equiv="refresh" content="2;URL=./story.php">';

    }else{
        echo '<h2>Insertion non réussie</h2>';
    }
}
?>

<!-- je crée mon formulaire lié à ma table story avec les memes noms de champs que ma table-->
<form method="post">
    <input type="text" name="title" placeholder="title" /><br/> <!-- je fais référence au champ title de la table story -->
    <textarea name="content" rows="10" rows="100" placeholder="content"></textarea><br/><br/> <!-- je fais référence au champ content de la table story -->
    <input type="text" name="author" placeholder="author" ><br/><br/> <!-- je fais référence au champ author de la table story -->
    <button type="submit" name="submit" value="submit">Créer</button>  <!-- je met en place le bouton de soumission du formulaire -->
</form>
<p>
<a href="/story.php">Voir toutes les stories</a>
</p>
