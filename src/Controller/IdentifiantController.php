<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/Mes_identifiants", name="identifiant_")
 */
class IdentifiantController extends AbstractController
{
    /**
     * @Route("/", name="_index_all")
     */
    public function index(): Response
    {
        return $this->render('Identifiant/index.html.twig');
    }
}
