<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/Commandes", name="commande_")
 */
class CommandeController extends AbstractController
{
    /**
     * @Route("/", name="_index_all")
     */
    public function index(): Response
    {



        return $this->render('Commande/index.html.twig');
    }
}
