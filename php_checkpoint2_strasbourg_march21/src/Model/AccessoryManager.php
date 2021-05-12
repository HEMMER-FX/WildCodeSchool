<?php

namespace App\Model;

class AccessoryManager extends AbstractManager
{
    //Pour intéragir avec ma base de donnée je dois lui dire laquelle utiliser
    public const TABLE = 'accessory';

    public function addAccessory($accessory)
    {
        // on insère en 3 partie, requete, donnée a insérer puis executer
        $req=$this->pdo->prepare("INSERT INTO " . self::TABLE . "(name,url) VALUES (:name,:url)");
        // ici on insère dit ce qu'il faut insérer dans la bdd via les marqueurs ":name/url"
        $req->bindValue(':name', $accessory['name'], \PDO::PARAM_STR);
        $req->bindValue(':url', $accessory['url'], \PDO::PARAM_STR);
        // puis on lui dit d'éxécuter la requete
        $req->execute();
    }
}
