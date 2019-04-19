<?php

namespace App\Services;



use Doctrine\DBAL\Connection;

class SiteService
{

    private $conn;


    public function __construct(Connection $connection)
    {
        $this->conn = $connection;
    }


    public function getClientFromCCID($contact_id)
    {
        $sqlClientFromCCID = "SELECT * FROM CENTRALE_ACHAT_v2.dbo.CLIENTS INNER JOIN CENTRALE_ACHAT_v2.dbo.CLIENTS_USERS ON CLIENTS.CL_ID = CLIENTS_USERS.CL_ID WHERE CC_ID = :id";

        $stmt = $this->conn->prepare($sqlClientFromCCID);
        $stmt->bindValue("id", $contact_id);
        $stmt->execute();
        $client = $stmt->fetchAll();
        $stmt->closeCursor();




        if (isset($client))
        {
            return $client[0];
        }

        return "Pas de compte client pour ce contact";

    }

    public function getFournFromProduct($product_id)
    {

        $sqlSelectFournFromProduct = "SELECT * FROM CENTRALE_PRODUITS.dbo.FOURNISSEURS INNER JOIN CENTRALE_PRODUITS.dbo.PRODUITS ON FOURNISSEURS.FO_ID = PRODUITS.FO_ID WHERE PR_ID = :id";

        $stmt = $this->conn->prepare($sqlSelectFournFromProduct);
        $stmt->bindValue("id", $product_id);
        $stmt->execute();
        $fournisseur = $stmt->fetchAll();



        if (isset($fournisseur))
        {
            return $fournisseur[0];
        }

        return "Pas de compte fournisseur pour ce produit";
    }
    
}