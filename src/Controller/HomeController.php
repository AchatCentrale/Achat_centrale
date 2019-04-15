<?php

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Connection $connection)
    {
        $sqlCatParent = "SELECT CatID, CatTitre, CatLien, CatDescription FROM CENTRALE_ACHAT_V2.dbo.Categories WHERE CatSort > 0 AND CatIDParent = 0 ORDER BY CatSort";

        $conn = $connection->prepare($sqlCatParent);
        $conn->execute();
        $catParent = $conn->fetchAll();

        $Categories = $catParent;

        foreach ($Categories as $i => $c){

            $sqlSousCateg = "SELECT CatID, CatTitre, CatLien, CatDescription FROM CENTRALE_ACHAT_V2.dbo.Categories WHERE CatSort > 0 AND CatIDParent = :id ORDER BY CatSort";

            $conn = $connection->prepare($sqlSousCateg);
            $conn->bindValue("id", $c['CatID']);
            $conn->execute();
            $cat = $conn->fetchAll();

            $Categories[$i]["sousCategories"] = $cat;



            foreach ($cat as $j => $sC){

                $sqlRayons = "SELECT CatID, CatTitre, CatLien, CatTitreReq, CatDescription, 'Produits.asp?Theme='+CatTitreReq AS URL
                                FROM CENTRALE_ACHAT_V2.dbo.Categories
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
                        FROM CENTRALE_ACHAT_V2.dbo.PARAM_FIXES
                        INNER JOIN CENTRALE_ACHAT_V2.dbo.Categories ON PF_ESPACE_PRIVE = CatIDParent
                        WHERE CatSort > 0
                        ORDER BY CatSort";

        $conn = $connection->prepare($sqlEspacePrive);
        $conn->execute();
        $espacesPrive = $conn->fetchAll();



        $sqlSlider = "SELECT *  FROM CENTRALE_ACHAT_V2.dbo.SLIDERS  WHERE SL_STATUS = 0  ORDER BY SL_ORDRE";

        $conn = $connection->prepare($sqlSlider);
        $conn->execute();
        $slider = $conn->fetchAll();



        $sqlPromoListe = "SELECT *  FROM CENTRALE_ACHAT_V2.dbo.PRODUITS_PROMO_CAT  ORDER BY PPC_ORDRE, PPC_DESCR";

        $conn = $connection->prepare($sqlPromoListe);
        $conn->execute();
        $PromoListe = $conn->fetchAll();

        $Produits = $PromoListe;


        foreach($PromoListe as $i => $promo){

            $sqlProduit = "SELECT * FROM CENTRALE_ACHAT_V2.dbo.PRODUITS_PROMO INNER JOIN CENTRALE_PRODUITS.dbo.PRODUITS ON PRODUITS_PROMO.PR_ID = PRODUITS.PR_ID INNER JOIN CENTRALE_PRODUITS.dbo.RAYONS ON PRODUITS.RA_ID = RAYONS.RA_ID INNER JOIN CENTRALE_ACHAT_V2.dbo.CATEG_RAYONS ON RAYONS.RA_ID = CATEG_RAYONS.RA_ID INNER JOIN CENTRALE_ACHAT_V2.dbo.Categories ON CATEG_RAYONS.CatID = Categories.CatID WHERE PRODUITS.SO_ID = 1 AND PR_STATUS = 0 AND PPC_ID = :id ORDER BY PP_ORDRE";



            $conn = $connection->prepare($sqlProduit);
            $conn->bindValue("id", $promo["PPC_ID"]);
            $conn->execute();
            $produit = $conn->fetchAll();
            $Produits[$i]["produits"] = $produit;
        }




        dump($Produits);

        return $this->render('Home/index.html.twig', [
            "rayons" => $Categories,
            "espacePrive" => $espacesPrive,
            "slider" => $slider,
            "produits" => $Produits,

        ]);
    }


    /**
     * @Route("/bruneau", name="home_b")
     */
    public function bruneau()
    {
        return $this->render('Home/header.html.twig');
    }



    /**
     * @Route("/test_encodage", name="encodage")
     */
    public function testEncodage()
    {
        return $this->render('encodage.html.twig');
    }


}
