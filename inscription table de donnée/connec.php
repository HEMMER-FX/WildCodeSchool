<?php
// Définition des constantes(identifiants) lié à ma BDD localhost
define('DSN','mysql:host=localhost;dbname=032021_kaamelott');
define('USER','yavuz');
define('PASS','yavuz');

// Cette ligne permet la connexion à la BDD
$pdo = new PDO(DSN, USER, PASS);
