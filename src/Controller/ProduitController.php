<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/produit", name="produit_")
 */
class ProduitController extends AbstractController
{
    /**
     * @Route("/{ref}", name="_index")
     */
    public function index($ref): Response
    {
        dump($ref);


        return $this->render('Produit/show.html.twig');
    }
}
