<?php

namespace App\Controller;

use App\Services\PanierService;
use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Connection $connection, PanierService $panierService)
    {


        $contact_id = $this->getUser()->getCcId();


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



        $sqlSlider = "SELECT *  FROM CENTRALE_ACHAT.dbo.SLIDERS  WHERE SL_STATUS = 0  ORDER BY SL_ORDRE";

        $conn = $connection->prepare($sqlSlider);
        $conn->execute();
        $slider = $conn->fetchAll();



        $sqlPromoListe = "SELECT *  FROM CENTRALE_ACHAT_V2.dbo.PRODUITS_PROMO_CAT  ORDER BY PPC_ORDRE, PPC_DESCR";

        $conn = $connection->prepare($sqlPromoListe);
        $conn->execute();
        $PromoListe = $conn->fetchAll();

        $Produits = $PromoListe;


        foreach($PromoListe as $i => $promo){

            $sqlProduit = "SELECT
                                * 
                            FROM 
                                CENTRALE_ACHAT_V2.dbo.PRODUITS_PROMO 
                            INNER JOIN 
                                CENTRALE_PRODUITS.dbo.PRODUITS ON PRODUITS_PROMO.PR_ID = PRODUITS.PR_ID
                            INNER JOIN CENTRALE_PRODUITS.dbo.RAYONS ON PRODUITS.RA_ID = RAYONS.RA_ID 
                            INNER JOIN CENTRALE_ACHAT_V2.dbo.CATEG_RAYONS ON RAYONS.RA_ID = CATEG_RAYONS.RA_ID 
                            INNER JOIN CENTRALE_ACHAT_V2.dbo.Categories ON CATEG_RAYONS.CatID = Categories.CatID 
                            WHERE 
                                PRODUITS.SO_ID = 1 
                            AND PR_STATUS = 0 
                            AND PPC_ID = :id 
                            ORDER BY PP_ORDRE";


            $conn = $connection->prepare($sqlProduit);
            $conn->bindValue("id", $promo["PPC_ID"]);
            $conn->execute();
            $produit = $conn->fetchAll();




            foreach ($produit as $index => $p){

                $sqlIsDeclinaison = "SELECT count(DD_ID) count FROM CENTRALE_PRODUITS.dbo.PRODUITS_DECLIN WHERE PR_ID = :id";


                $conn = $connection->prepare($sqlIsDeclinaison);
                $conn->bindValue("id", $p["PR_ID"]);
                $conn->execute();
                $isDeclinaison = $conn->fetchAll();

                $sqlNouveaute = "SELECT count(*) count FROM CENTRALE_PRODUITS.dbo.NOUVEAUTES_PR INNER JOIN CENTRALE_PRODUITS.dbo.NOUVEAUTES ON CENTRALE_PRODUITS.dbo.NOUVEAUTES_PR.NO_ID = CENTRALE_PRODUITS.dbo.NOUVEAUTES.NO_ID WHERE PR_ID = :id";

                $conn = $connection->prepare($sqlNouveaute);
                $conn->bindValue("id", $p["PR_ID"]);
                $conn->execute();
                $isNouveaute = $conn->fetchAll();


                if ($isDeclinaison[0]["count"] || $isNouveaute[0]["count"]){

                    $sqlDeclinaison = "SELECT
                                            (SELECT DE_DESCR FROM CENTRALE_PRODUITS.dbo.DECLINAISONS WHERE PRODUITS_DECLIN.DE_ID = DECLINAISONS.DE_ID) DECLINAISONS,
                                            (SELECT DD_DESCR FROM CENTRALE_PRODUITS.dbo.DECLINAISONS_DETAIL WHERE DECLINAISONS_DETAIL.DD_ID = PRODUITS_DECLIN.DD_ID) DETAIL
                                        FROM
                                            CENTRALE_PRODUITS.dbo.PRODUITS_DECLIN
                                        WHERE PR_ID = 24502";

                    $conn = $connection->prepare($sqlDeclinaison);
                    $conn->bindValue("id", $p["PR_ID"]);
                    $conn->execute();
                    $declinaison = $conn->fetchAll();

                    $resultDeclinaison = [];
                    foreach ($declinaison as $element) {
                        $resultDeclinaison[$element['DECLINAISONS']][] = $element["DETAIL"];
                    }

                    $sqlNouveaute = "SELECT *  FROM CENTRALE_PRODUITS.dbo.NOUVEAUTES_PR INNER JOIN CENTRALE_PRODUITS.dbo.NOUVEAUTES ON CENTRALE_PRODUITS.dbo.NOUVEAUTES_PR.NO_ID = CENTRALE_PRODUITS.dbo.NOUVEAUTES.NO_ID WHERE PR_ID = :id";

                    $conn = $connection->prepare($sqlNouveaute);
                    $conn->bindValue("id", $p["PR_ID"]);
                    $conn->execute();
                    $nouveaute = $conn->fetchAll();



                    $produit[$index]["declinaison"] = $resultDeclinaison;
                    $produit[$index]["nouveaute"] = $nouveaute;
                }else {
                    $produit[$index]["declinaison"] = [];
                    $produit[$index]["nouveaute"] = [];
                }
            }

            $Produits[$i]["produits"] = $produit;
        }




        $panier = $panierService->getPanierContent($contact_id);



        return $this->render('Home/index.html.twig', [
            "rayons" => $Categories,
            "espacePrive" => $espacesPrive,
            "slider" => $slider,
            "produits" => $Produits,
            "panier" => $panier
        ]);
    }



}
