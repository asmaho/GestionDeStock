<?php

namespace HTM\StockBundle\Controller;

use HTM\MagasinierBundle\Form\SupplyEntryType;
use HTM\MagasinierBundle\Form\SupplyEntyType;
use HTM\MagasinierBundle\Form\SupplyNewType;
use HTM\MagasinierBundle\Form\SupplyType;
use HTM\StockBundle\Entity\DemandeApp;
use HTM\StockBundle\Entity\Entree;
use HTM\StockBundle\Entity\Sortie;
use HTM\StockBundle\Form\DemandeAppType;
use HTM\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Constraints\DateTime;

class ProduitEnStockController extends Controller
{
    /**
     * @Route("/StockGlobale", name="stock_globale")
     *
     * @Template()
     */

    public function indexAction(Request $request, $categorie = null, $page = 1)
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('HTMStockBundle:Categorie')->findAll();

        $categorie = $em->getRepository('HTMStockBundle:Categorie')->findOneById($categorie);
        if (!$categorie)
            $categorie = $em->getRepository('HTMStockBundle:Categorie')->findAll(array(), array(), 1);
        $listeproduits = $em->getRepository('HTMStockBundle:Produit')->findByCategorie($categorie);

        $produits = $this->get('knp_paginator')->paginate($listeproduits,
            $request->query->get('page', $page)/*page number*/,
            4/*limit per page*/
        );

        return $this->render('HTMStockBundle::produitenstock.html.twig', array(
            'produits' => $produits,
            'categories' => $categories,
        ));
    }


    /**
     * @Route("/entre", name="admin_list_supply_entre")
     * @Template()
     */
    public function SupplySortieIndexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('HTMStockBundle:DemandeApp')->findByUser($this->getUser());
        return $this->render('HTMStockBundle:ProduitEnStock:SupplyListentre.html.twig', array(
            'entities' => $entities));


    }

    /**
     * @Route("/change-statut/{id}/{statut}", name="admin_change_statut")
     * @Template()
     */
    public function changeStatutAction(Request $request, $id, $statut)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('HTMStockBundle:DemandeApp')->findOneById($id);
        $entity->setStatut($statut);
        $produit = $em->getRepository('HTMStockBundle:SalePointProduct')->findOneBy(array('produit' => $entity->getProduit(), 'salePoint' => $entity->getPointDeVente()));
        $quantite = $produit->getQuantite() + $entity->getQuantite();
        $produit->setQuantite($quantite);
        $entre = new Entree();
        $entre->setDate(new \DateTime());
        $entre->setProduit($entity->getProduit());
        $entre->setSalePoint($entity->getPointDeVente());
        $entre->setQuantite($entity->getQuantite());
        $em->persist($entre);
        $sortie = new Sortie();
        $sortie->setDate(new \DateTime());
        $sortie->setProduit($entity->getProduit());
        $sortie->setQuantite($entity->getQuantite());
        $sortie->setMagasinier($entity->getPointDeVente()->getMagasinier());
        $sortie->setPrixVente(20);
        $em->persist($sortie);
        $quantitePoint = $entity->getProduit()->getQuantiteStock() + $entity->getQuantite();
        $entity->getProduit()->setQuantiteStock($quantitePoint);
        $em->flush();
        return $this->redirect($this->generateUrl('admin_list_supply_entre'));


    }

    /**
     * @param string $role
     *
     * @return array
     */
    public function findByRole($role)
    {
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->select('u')
            ->from(User::class, 'u')
            ->where('u.roles LIKE :roles')
            ->setParameter('roles', '%"' . $role . '"%');
        $qb->setMaxResults(1);
        return $qb->getQuery()->getResult();
    }

}
