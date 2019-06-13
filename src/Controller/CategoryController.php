<?php

namespace App\Controller;

use App\Services\PanierService;
use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/categorie", name="category")
 */
class CategoryController extends AbstractController
{

    /**
     * @Route("/{category}", name="_categorie_all")
     */
    public function indexCategory(Connection $connection, $category)
    {

        $sql = "SELECT * FROM CENTRALE_ACHAT_v2.dbo.Categories WHERE CatTitreReq = :cat";
        $conn = $connection->prepare($sql);
        $conn->bindValue("cat", $category);
        $conn->execute();

        $resultCat = $conn->fetchAll();

        $sqlCatParent = "SELECT CatID, CatTitre, CatLien, CatDescription, CatTitreReq FROM CENTRALE_ACHAT_V2.dbo.Categories WHERE CatSort > 0 AND CatIDParent = 0 AND CatID = :id ORDER BY CatSort";

        $conn = $connection->prepare($sqlCatParent);
        $conn->bindValue("id", $resultCat[0]["CatID"]);
        $conn->execute();
        $catParent = $conn->fetchAll();
        $Categories = $catParent;


        foreach ($Categories as $i => $c){

            $sqlSousCateg = "SELECT CatID, CatTitre, CatLien, CatDescription, CatTitreReq FROM CENTRALE_ACHAT_V2.dbo.Categories WHERE CatSort > 0 AND CatIDParent = :id ORDER BY CatSort";

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


        dump($Categories);




        return $this->render("Category/index.html.twig", [
            "category" => $Categories[0],
        ]);
    }

    /**
     * @Route("/{category}/{rayon}", name="_rayons_all")
     */
    public function indexRayon(Connection $connection, $category, $rayon)
    {
        return $this->render("Category/rayons.html.twig", [
            "category" => $category,
            "rayon" => $rayon,
        ]);
    }



}