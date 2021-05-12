<?php

namespace App\Model;

class CupcakeManager extends AbstractManager
{
    public const TABLE="cupcake";

    public function accessoriesCupcakes($id)
    {
        $statement = $this->pdo->query("SELECT c.id, c.name, c.color1, c.color2, c.color3, a.name AS accessory, a.url 
        FROM " . self::TABLE . " c JOIN " . AccessoryManager::TABLE . " a ON c.accessory_id = a.id WHERE c.id='$id'");
        return $statement->fetch();
    }

    public function addCupcake(array $cupcake)
    {
        $req=$this->pdo->prepare("INSERT INTO " .self::TABLE . " (`name`,`color1`,`color2`,`color3`,
        `accessory_id`,`created_at`)
        VALUES (:name,:color1,:color2,:color3,:accessory_id,NOW())");
        $req->bindValue(':name', $cupcake['name'], \PDO::PARAM_STR);
        $req->bindValue(':color1', $cupcake['color1'], \PDO::PARAM_STR);
        $req->bindValue(':color2', $cupcake['color2'], \PDO::PARAM_STR);
        $req->bindValue(':color3', $cupcake['color3'], \PDO::PARAM_STR);
        $req->bindValue(':accessory_id', $cupcake['accessory_id'], \PDO::PARAM_STR);
        $req->execute();
    }

    public function cupcakeList()
    {
        $req=$this->pdo->query("SELECT c.id, c.name, c.color1, c.color2, c.color3, a.url AS url FROM " .
        self::TABLE . " c JOIN " . AccessoryManager::TABLE . " a ON c.accessory_id = a.id ORDER BY id DESC");
        return $req->fetchAll();
    }
    public function selectLast()
    {
        return $this->pdo->query("SELECT c.id,c.name,c.color1,c.color2,c.color3,a.name as accessory,a.url FROM "
        .self::TABLE . " c JOIN " . AccessoryManager::TABLE . " a ON c.accessory_id=a.id ORDER BY c.id DESC 
        LIMIT 1")->fetch();
    }
}
