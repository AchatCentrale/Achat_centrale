<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/Vos_contrats", name="contrat_")
 */
class ContratController extends AbstractController
{
    /**
     * @Route("/", name="_index_all")
     */
    public function index(): Response
    {



        return $this->render('Contrats/index.html.twig');
    }
}
