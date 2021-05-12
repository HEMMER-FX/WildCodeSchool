<?php

namespace App\Controller;

// il me faut utiliser le manager pour intéragir avec ma base de donnée, ici je l'appel
// n'étant pas créé de base , il me faut le créer .
use App\Model\AccessoryManager;

/**
 * Class AccessoryController
 *
 */
class AccessoryController extends AbstractController
{
    /**
     * Display accessory creation page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function add()
    {
        // ajout du tableau accessory car bucheron rouge, je sais pas pourquoi.
        $accessory = [];
        // il faut intéragir avec la base de donnée , y insérer un accessoire, donc je dois
        // faire appel à mon manager (Pour rappel controller = route , manager = manipulation de bdd)
        $accessoryManager = new AccessoryManager();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // ici on lui dit ce que fait le post , a quoi va correspondre chaques valeurs
            //TODO Add your code here to create a new accessory
            // on assigne le post name/url a la variable utilise dans accessory manager
            $accessory['name'] = $_POST['name'];
            $accessory['url'] = $_POST['url'];
            // une fois les valeurs "enregistré, je lui dit quoi en faire
            $accessoryManager->addAccessory($accessory);
            header('Location:/accessory/list');
        }
        return $this->twig->render('Accessory/add.html.twig');
    }

    /**
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function list()
    {
        // a nouveau pour intéragir avec ma bdd (voir ce qu'il y a dedans)
        // je dois appeller mon manager accesory
        $accessoryManager= new AccessoryManager();
        // ici je vais dire a mon nouvel objet ce qu'il doit faire (retourner X accessory)
        // je ne créé pas de méthod selectAll cette dernière étant dispo dans abstractmaanger
        $accessories = $accessoryManager->selectAll();
        //TODO Add your code here to retrieve all accessories
        // afin de pouvoir faire une boucle en twig pour les afficher il me faut créer une
        // variable a utiliser en twig ($X n'étant pas possible)
        return $this->twig->render('Accessory/list.html.twig', ['accessories'=>$accessories]);
    }
}
