<?php
// Définition des constantes(identifiants) lié à ma BDD localhost
define('DSN','mysql:host=localhost;dbname=namebdd');
define('USER','nameuser');
define('PASS','passuser');

// Cette ligne permet la connexion à la BDD
$pdo = new PDO(DSN, USER, PASS);
