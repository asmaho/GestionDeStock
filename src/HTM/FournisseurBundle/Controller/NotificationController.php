<?php

namespace HTM\FournisseurBundle\Controller;
use HTM\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class NotificationController extends Controller
{

     public function afficheAction()
    {
        return $this->render('HTMFournisseurBundle:Notification:affiche.html.twig');
    }
    /**
     * @Route("/demandeRecu", name="demande_recu")
     * @Template()
     */
    public function indexAction(Request $request,$page=1)
    {
        $em = $this->getDoctrine()->getManager();


        $listeproduits = $em->getRepository('HTMStockBundle:Produit')->findAll();
        $produits=array();


        foreach ($listeproduits as $produit) {
            //, 'salePoint' => $this->getUser()->getMagasinier()->getPointDeVente()
            $p = $em->getRepository('HTMStockBundle:ProduitFournisseur')->findOneBy(array('produit' => $produit
            ,'fournisseur'=>$this->getUser()->getFournisseur()
            ));
            if ($p != null){
                $produits[]=$p;
            }
        }

        $produits  = $this->get('knp_paginator')->paginate($produits,
            $request->query->get('page', $page)/*page number*/,
            3/*limit per page*/
        );

        return $this->render('HTMFournisseurBundle::produitfournisseur.html.twig',array(
            'produits' => $produits,

        ));
    }

    /**
     * @Route("/change-statut/{id}/{statut}", name="change-statut")
     * @Template()
     */
    /*
    public function changeStatutAction(Request $request,$id,$statut){
        $em = $this->getDoctrine()->getManager();
        $entity= $em->getRepository('HTMStockBundle:DemandeApp')->findOneById($id);
        $entity->setStatut($statut);
        $produit=$em->getRepository('HTMStockBundle:SalePointProduct')->findOneBy(array('produit'=>$entity->getProduit(),'salePoint'=>$entity->getPointDeVente()));
        $quantite=$produit->getQuantite()+$entity->getQuantite();
        $produit->setQuantite($quantite);
        $entre=new Entree();
        $entre->setDate(new \DateTime());
        $entre->setProduit($entity->getProduit());
        $entre->setSalePoint($entity->getPointDeVente());
        $entre->setQuantite($entity->getQuantite());
        $em->persist($entre);

        $sortie=new Sortie();
        $sortie->setDate(new \DateTime());
        $sortie->setProduit($entity->getProduit());
        $sortie->setQuantite($entity->getQuantite());
        $sortie->setMagasinier($entity->getPointDeVente()->getMagasinier());
        $sortie->setPrixVente(20);
        $em->persist($sortie);

        $produitPoint=$em->getRepository('HTMStockBundle:SalePointProduct')->findOneBy(array('produit'=>$entity->getProduit(),'salePoint'=>$this->getUser()->getMagasinier()->getPointDeVente()));
        $quantitePoint=$produitPoint->getQuantite()+$entity->getQuantite();
        $produitPoint->setQuantite($quantitePoint);
        $em->flush();
        return $this->redirect($this->generateUrl('list_supply_entre'));


    }*/

}
