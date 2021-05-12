<?php
include'./header.php';

// J'effectue la MAJ de ma table
if(isset($_POST['submit']) && $_POST['submit']<>''){
    $pdo->exec("UPDATE story SET title='".$_POST['title']."', content='".$_POST['content']."', author='".$_POST['author']."' WHERE id=".$_POST['id']);
}
// Je test si il y a une demande de modification
// Et je récupere l'id de l'enregistrement a modifier
if(isset($_GET['id']) && $_GET['id']<>''){
    $story = $pdo->query("SELECT * FROM story WHERE id=".$_GET['id'])->fetch();
}

?>

<!-- je crée mon formulaire lié à ma table story avec les memes noms de champs que ma table-->
<!-- Formulaire identique au formulaire de la page create/insertion sauf 1 ligne -->
<form method="post">
    <input type="text" name="title" placeholder="title" value="<?php echo $story['title']; ?>" /><br/> <!-- je fais référence au champ title de la table story -->
    <textarea name="content" rows="10" rows="100" placeholder="content"><?php echo $story['content']; ?></textarea><br/><br/> <!-- je fais référence au champ content de la table story -->
    <input type="text" name="author" placeholder="author" value="<?php echo $story['author']; ?>" ><br/><br/> <!-- je fais référence au champ author de la table story -->

    <!-- Spécifique à la modification -->
    <input type="hidden" name="id" value="<?php echo $story['id']; ?>" />
    <!-- Spécifique à la modification -->

    <button type="submit" name="submit" value="submit">Modification numéro <?php echo $story['id']; ?></button>  <!-- je met en place le bouton de soumission du formulaire -->
</form>
<p>
    <a href="/story.php">Voir toutes les stories</a>
</p>
