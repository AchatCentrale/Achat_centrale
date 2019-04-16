<?php

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;



/**
 * @Route("/cart", name="cart_")
 */
class PanierController extends AbstractController
{


    /**
     * @Route("/new", name="new", methods={"POST"})
     */
    public function new(Connection $connection, Request $request)
    {



        $client_id = $request->get("clid");


        dump($client_id);

        return $this->json($client_id);

    }


}
