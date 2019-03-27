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


        $sqlCatParent = "SELECT CatID, CatTitre, CatLien, CatDescription FROM dbo.Categories WHERE CatSort > 0 AND CatIDParent = 0 ORDER BY CatSort";

        $conn = $connection->prepare($sqlCatParent);
        $conn->execute();
        $catParent = $conn->fetchAll();


        $sqlRayons = "SELECT CatID, CatTitre, CatLien, CatTitreReq, CatDescription
                        FROM dbo.PARAM_FIXES
                        INNER JOIN dbo.Categories ON PF_ESPACE_PRIVE = CatIDParent
                        WHERE CatSort > 0
                        ORDER BY CatSort";

        $conn = $connection->prepare($sqlRayons);
        $conn->execute();
        $rayons = $conn->fetchAll();




        return $this->render('Home/index.html.twig', [
            "catParent" => $catParent,
            "rayons" => $rayons,
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
