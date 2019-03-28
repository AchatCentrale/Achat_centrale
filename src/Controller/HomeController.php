<?php

namespace App\Controller;

use App\Entity\Users;
use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Connection $connection)
    {

        $sqlCatParent = "SELECT CatID, CatTitre, CatLien, CatDescription FROM CENTRALE_ACHAT.dbo.Categories WHERE CatSort > 0 AND CatIDParent = 0 ORDER BY CatSort";

        $conn = $connection->prepare($sqlCatParent);
        $conn->execute();
        $catParent = $conn->fetchAll();

        $Categories = $catParent;

        foreach ($Categories as $i => $c){

            $sqlSousCateg = "SELECT CatID, CatTitre, CatLien, CatDescription FROM CENTRALE_ACHAT.dbo.Categories WHERE CatSort > 0 AND CatIDParent = :id ORDER BY CatSort";

            $conn = $connection->prepare($sqlSousCateg);
            $conn->bindValue("id", $c['CatID']);
            $conn->execute();
            $cat = $conn->fetchAll();

            $Categories[$i]["sousCategories"] = $cat;



            foreach ($cat as $j => $sC){

                $sqlRayons = "SELECT CatID, CatTitre, CatLien, CatTitreReq, CatDescription, 'Produits.asp?Theme='+CatTitreReq AS URL
                                FROM CENTRALE_ACHAT.dbo.Categories
                                WHERE CatSort > 0 AND CatIDParent = :id AND CatLien = 'produit_centrale'
                                ORDER BY CatSort";

                $conn = $connection->prepare($sqlRayons);
                $conn->bindValue("id", $sC['CatID']);
                $conn->execute();
                $rayons = $conn->fetchAll();

                $Categories[$i]["sousCategories"][$j]["rayon"] = $rayons;

            }

        }

        $sqlEspacePrive = "SELECT CatID, CatTitre, CatLien, CatTitreReq, CatDescription
                        FROM dbo.PARAM_FIXES
                        INNER JOIN CENTRALE_ACHAT.dbo.Categories ON PF_ESPACE_PRIVE = CatIDParent
                        WHERE CatSort > 0
                        ORDER BY CatSort";

        $conn = $connection->prepare($sqlEspacePrive);
        $conn->execute();
        $espacesPrive = $conn->fetchAll();



        return $this->render('Home/index.html.twig', [
            "rayons" => $Categories,
            "espacePrive" => $espacesPrive,

        ]);
    }


    /**
     * @Route("/bruneau", name="home_b")
     */
    public function bruneau()
    {
        return $this->render('Home/header.html.twig');
    }


}
