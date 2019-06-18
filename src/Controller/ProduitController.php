<?php

namespace App\Controller;

use Doctrine\DBAL\Connection;
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
    public function index($ref, Connection $connection): Response
    {

        $sqlCatParent = "SELECT
                             * 
                        FROM
                             CENTRALE_PRODUITS.dbo.PRODUITS
                        WHERE PR_REF = :ref";

        $conn = $connection->prepare($sqlCatParent);
        $conn->bindValue("ref",$ref );
        $conn->execute();
        $produit = $conn->fetchAll();
        dump($produit);

        return $this->render('Produit/show.html.twig', [
            "produit" => $produit[0]
        ]);
    }
}
