<?php

namespace App\Twig;

use Doctrine\DBAL\Connection;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class ProductFilter extends AbstractExtension
{

    private $connection;


    public function __construct(Connection $connection)
    {
        $this->connection = $connection;

    }


    public function getFilters()
    {
        return [
            new TwigFilter('product_pic', [$this, 'getProductPic']),
            new TwigFilter('declinaison', [$this, 'getDeclinaison']),
            new TwigFilter('picFrs', [$this, 'getProfilePicFrs']),
            new TwigFilter('remise', [$this, 'getDiscountPercentage']),
        ];
    }

    public function getProductPic($id)
    {

        $sql = "SELECT PP_FICHIER FROM CENTRALE_PRODUITS.dbo.PRODUITS_PHOTOS WHERE PR_ID = :id AND PP_TYPE = 'PRINCIPALE'";

        $conn = $this->connection->prepare($sql);
        $conn->bindValue("id", $id);
        $conn->execute();
        $pic = $conn->fetchAll();

        $result = sprintf("http://secure.achatcentrale.fr/UploadFichiers/Uploads/PRODUIT_%s/%s", $id, $pic[0]["PP_FICHIER"]);

        return $result;
    }

    public function getDeclinaison($id){

        $sql = "SELECT DISTINCT DECLINAISONS.DE_ID, DE_DESCR, DE_TRI
                FROM CENTRALE_PRODUITS.dbo.PRODUITS_DECLIN
                INNER JOIN CENTRALE_PRODUITS.dbo.DECLINAISONS ON PRODUITS_DECLIN.DE_ID = DECLINAISONS.DE_ID
                INNER JOIN CENTRALE_PRODUITS.dbo.DECLINAISONS_DETAIL ON PRODUITS_DECLIN.DE_ID = DECLINAISONS_DETAIL.DE_ID
                WHERE PR_ID = :id
                ORDER BY DE_TRI";


        $conn = $this->connection->prepare($sql);
        $conn->bindValue("id", $id);
        $conn->execute();
        $declinaison = $conn->fetchAll();


        return $declinaison[0]["DE_DESCR"];
    }

    public function getProfilePicFrs($id)
    {

        $sql = "SELECT FO_LOGO FROM CENTRALE_PRODUITS.dbo.FOURNISSEURS WHERE FO_ID = :id";

        $conn = $this->connection->prepare($sql);
        $conn->bindValue("id", $id);
        $conn->execute();
        $pic = $conn->fetchAll();


        return "http://secure.achatcentrale.fr/UploadFichiers/Uploads/FOURN_".$id."/".$pic[0]["FO_LOGO"];


    }


    public function getDiscountPercentage($prix_ac, $prix_public)
    {

        return ($prix_public - $prix_ac) / $prix_public * 100;

    }

}