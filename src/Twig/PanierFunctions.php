<?php

namespace App\Twig;


use Doctrine\DBAL\Connection;
use Symfony\Bridge\Twig\AppVariable;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class PanierFunctions extends AbstractExtension
{


    private $tokenStorage;
    private $connection;


    public function __construct(TokenStorageInterface $tokenStorage, Connection $connection)
    {
        $this->tokenStorage = $tokenStorage;
        $this->connection = $connection;
    }


    public function getFunctions()
    {

        return [
            new TwigFunction('panier_count', [$this, 'getPanierCount']),
        ];
    }

    public function getPanierCount()
    {
        if (null === $token = $this->tokenStorage->getToken()) {
            return array();
        }

        $user_id = $token->getUser()->getCcId();



        $sqlCount = "SELECT count(*) as COUNT FROM CENTRALE_ACHAT_v2.dbo.PANIER_TEMP WHERE CC_ID = :id AND ME_ID = 0";

        $conn = $this->connection->prepare($sqlCount);
        $conn->bindValue("id", $user_id);
        $conn->execute();
        $panierCount = $conn->fetchAll();




        return $panierCount[0]['COUNT'];

    }


}