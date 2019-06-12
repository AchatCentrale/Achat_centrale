<?php

namespace App\Services;

use Doctrine\DBAL\Connection;
use Symfony\Component\Security\Csrf\TokenStorage\TokenStorageInterface;

class PanierService
{

    private $conn;
    private $tokenStorage;



    public function __construct(Connection $connection, TokenStorageInterface $tokenStorage)
    {
        $this->conn = $connection;
        $this->tokenStorage = $tokenStorage;
    }


    public function getPanierContent($id)
    {

        $sqlTotal = "SELECT
                            PT_ID,
                            PT_QTE,
                            PR_ID,
                            PR_ID,
                           (SELECT PR_NOM FROM CENTRALE_PRODUITS.dbo.PRODUITS WHERE PRODUITS.PR_ID = PANIER_TEMP.PR_ID) as NOM_PRODUITS,
                           (SELECT PR_PRIX_CA FROM CENTRALE_PRODUITS.dbo.PRODUITS WHERE PANIER_TEMP.PR_ID = PRODUITS.PR_ID) as PRIX,
                           (SELECT PP_FICHIER FROM CENTRALE_PRODUITS.dbo.PRODUITS_PHOTOS WHERE PANIER_TEMP.PR_ID = PRODUITS_PHOTOS.PR_ID) AS LOGO
                    FROM CENTRALE_ACHAT_v2.dbo.PANIER_TEMP WHERE CC_ID = :id AND ME_ID = 0";

        $conn = $this->conn->prepare($sqlTotal);
        $conn->bindValue("id", $id);
        $conn->execute();
        $panier = $conn->fetchAll();

        return $panier;
    }

}