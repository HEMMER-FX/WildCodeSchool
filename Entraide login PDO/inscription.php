<?php
    session_start();
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $login = $_POST["login"];
    $pass = $_POST["pass"];
    $repass = $_POST["pass"];
    $valider = $_POST["valider"];
    $erreur = "";
    if (isset($valider)){
        if(empty($nom)){ $erreur="nom vide!";}
        elseif(empty($prenom)){ $erreur="prenom vide!";}
        elseif(empty($login)){ $erreur="login vide!";}
        elseif(empty($pass)){ $erreur="pass vide!";}
        elseif(empty($repass)){ $erreur="repass vide!";}
        elseif($pass!=$repass) { $erreur="pas cbzucqbshl!";}
        else{
            include("connexion.php");
            $sel=$pdo->prepare("select id from users where login=? limit 1");
            $sel->execute(array($login));
            $tab=$sel->fetchAll();
            if(count($tab)>0){
                $erreur = "Login dejà pris!";
            }else{
                $ins=$pdo->prepare("insert into users (nom, prenom, login, pass) VALUE (?,?,?,?)");
                if($ins->execute(array($nom,$prenom,$login,$pass))){
                    header("location: login.php");
                    exit();
                }
            }
        }

    }

?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <style>
         *{
            font-family:arial;
         }
         body{
            margin:20px;
         }
         input{
            border:solid 1px #2222AA;
            margin-bottom:10px;
            padding:16px;
            outline:none;
            border-radius:6px;
         }
         .error{
            color:#CC0000;
            margin-bottom:10px;
         }
      </style>
   </head>
   <body>
      <h1>Inscription</h1>
      <div class="erreur"><?php echo $erreur ?></div>
      <form name="fo" method="post" action="">
         <input type="text" name="nom" placeholder="Nom" value="<?php echo $nom?>" /><br />
         <input type="text" name="prenom" placeholder="Prénom" value="<?php echo $prenom?>" /><br />
         <input type="text" name="login" placeholder="Login" value="<?php echo $login?>" /><br />
         <input type="password" name="pass" placeholder="Mot de passe" /><br />
         <input type="password" name="repass" placeholder="Confirmer Mot de passe" /><br />
         <input type="submit" name="valider" value="S'authentifier" />
      </form>
   </body>
</html>