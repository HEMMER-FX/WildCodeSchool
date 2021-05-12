<?php

namespace App\Controller;

use App\Model\AccessoryManager;
use App\Model\CupcakeManager;
use App\Service\ColorGenerator;

/**
 * Class CupcakeController
 *
 */
class CupcakeController extends AbstractController
{
    /**
     * Display cupcake creation page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function add()
    {
        $newCupcake = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $newCupcake['name']= $_POST['name'];
            $newCupcake['color1']= $_POST['color1'];
            $newCupcake['color2']= $_POST['color2'];
            $newCupcake['color3']= $_POST['color3'];
            $newCupcake['accessory_id']= $_POST['accessory'];
            $cupcakeManager = new CupcakeManager();
            $cupcakeManager->addCupcake($newCupcake);
            //TODO Add your code here to create a new cupcake
            header('Location:/cupcake/list');
        }
        $accessoryManager = new AccessoryManager();
        $accessories = $accessoryManager->selectAll();
        return $this->twig->render('Cupcake/add.html.twig', [
            'accessories' => $accessories,
            'cupcake'
        ]);
    }

    /**
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function list()
    {
        $cupcakeManager= new CupcakeManager();
        $cupcakes = $cupcakeManager->cupcakeList();
        //TODO Retrieve all cupcakes
        return $this->twig->render('Cupcake/list.html.twig', ['cupcakes'=>$cupcakes]);
    }

    public function show($id)
    {
        $cupcakeManager = new CupcakeManager();
        $cupcakes = $cupcakeManager->accessoriesCupcakes($id);
        $colors = [$cupcakes['color1' ], $cupcakes['color2'], $cupcakes['color3']];

        $colorgenerator = new ColorGenerator();
        $color = $colorgenerator->generateColor($colors);

        $titlecolor = $colorgenerator->invertColor($colors);

        return $this->twig->render('Cupcake/show.html.twig', [
            'cupcake' => $cupcakes,
            'background' => $color,
            'titlecolor' => $titlecolor
        ]);
    }
}
