<?php

namespace App\Controller;

use App\Services\PanierService;
use App\Services\SiteService;
use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;



/**
 * @Route("/cart", name="cart_")
 */
class PanierController extends AbstractController
{


    /**
     * @Route("/new", name="new", methods={"POST"})
     */
    public function new(Connection $connection, Request $request, SiteService $helper, PanierService $panierService)
    {

        $data = $data = json_decode($request->getContent(), true);

        $client_id = $helper->getClientFromCCID($this->getUser()->getCcId());
        $contact_id = $this->getUser()->getCcId();

        $produit_id = $data["prid"];
        $fourn_id = $helper->getFournFromProduct($produit_id);
        $quantity = $data["qty"];
        $prix = $data["prix"];


        if ($panierService->isProductExistInCart($produit_id, $this->getUser()->getCcId())){

        }


        if( $client_id !== '' && $contact_id !== '' && $produit_id !== '' && $quantity !== '' && $prix !== ''){
            $sqlInsertNewCart = "INSERT INTO CENTRALE_ACHAT_v2.dbo.PANIER_TEMP (CL_ID, CC_ID, FO_ID, PR_ID, PT_DATE, PT_QTE, PT_DETAIL, PT_PRIX_VC, INS_DATE, INS_USER, MAJ_DATE, MAJ_USER) VALUES (:clid, :ccid, :foid, :prid, GETDATE(), :qty, '',:prix, GETDATE(),  :user_auth, GETDATE(), :user_auth  )";

            $conn = $connection->prepare($sqlInsertNewCart);
            $conn->bindValue("clid", $client_id["CL_ID"]);
            $conn->bindValue("ccid", $contact_id);
            $conn->bindValue("foid", $fourn_id["FO_ID"]);
            $conn->bindValue("prid", $produit_id);
            $conn->bindValue("qty", $quantity);
            $conn->bindValue("prix", $prix);
            $conn->bindValue("user_auth", $this->getUser()->getCcMail());
            $panier = $conn->execute();

            return $this->json($panier);
        } else {
            return $this->json("Error");
        }
    }


    /**
     * @Route("/delete", name="remove_cart", methods={"POST"})
     */
    public function remove(Connection $connection, Request $request, SiteService $helper)
    {

        $data = $data = json_decode($request->getContent(), true);

        $sqlInsertNewCart = "DELETE FROM CENTRALE_ACHAT_v2.dbo.PANIER_TEMP WHERE PT_ID = :id";

        $conn = $connection->prepare($sqlInsertNewCart);
        $conn->bindValue("id", $data["ptid"]);

        $result = $conn->execute();



        return $this->json(true);
    }


    public function displayCartHeader(PanierService $panierService)
    {

        $contact_id = $this->getUser()->getCcId();

        $panier = $panierService->getPanierContent($contact_id);


        return $this->render('partials/Panier_header.html.twig', ['panier' => $panier]);


    }


}
