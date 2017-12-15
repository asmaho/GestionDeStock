<?php

namespace HTM\MagasinierBundle\Controller;

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
	 * @Route("/produitEnStock", name="produit_en_stock")
	 * @Template()
	 */

    public function indexAction(Request $request,$categorie=null,$page=1)
    {
 		$em = $this->getDoctrine()->getManager();
 		 $categories = $em->getRepository('HTMStockBundle:Categorie')->findAll();

 		 $categorie = $em->getRepository('HTMStockBundle:Categorie')->findOneById($categorie);
  		 if(!$categorie)
  		   $categorie = $em->getRepository('HTMStockBundle:Categorie')->findAll(array(),array(),1);
        $listeproduits = $em->getRepository('HTMStockBundle:Produit')->findByCategorie($categorie);
		$produits=array();

		/*foreach ($listeproduits as $produit){
			$produits[]=$em->getRepository('HTMStockBundle:SalePointProduct')->findOneBy(array('produit'=>$produit,'salePoint'=>$this->getUser()->getMagasinier()->getPointDeVente()));
		}

		$produits = $em->createQuery("
                  WHERE
                    ( p.Categorie = :categorie and      SELECT p  FROM HTMStockBundle:Produit p
                  JOIN HTMStockBundle:SalePointProduct s  salePoint =                         )")
				->setParameter('categorie', $categorie)
				->getResult();*/
		foreach ($listeproduits as $produit) {
			//, 'salePoint' => $this->getUser()->getMagasinier()->getPointDeVente()
			$p = $em->getRepository('HTMStockBundle:SalePointProduct')->findOneBy(array('produit' => $produit,'salePoint'=>$this->getUser()->getMagasinier()->getPointDeVente()));
			if ($p != null){
				$produits[]=$p;
			}
		}

        $produits  = $this->get('knp_paginator')->paginate($produits,
        $request->query->get('page', $page)/*page number*/,
        3/*limit per page*/
    );

         return $this->render('HTMMagasinierBundle::produitenstock.html.twig',array(
         	'produits' => $produits,
         	'categories' => $categories,
         	));
    }
	//apl de formulaire supplyType
    /**
	* @Route("/supply", name="supply")
	* @Template()
    */
  public function SupplyAction(){
  	$form=$this->createForm(new SupplyType());
  	return array('form'=>$form->createView()) ;
  }
	// selon le produit il faut afficher l'ensemble des pv
     /**
	* @Route("/supply_list", name="supply_list")
	* @Template()
    */
  public function SupplyListAction(Request $request){
	  //$user = $this->getUser();
	// $pointDeVente = $user->getMagasiner()->getSalePoint();

  	 $id=$request->get('id');
	 $em = $this->getDoctrine()->getManager();
  	 $produit = $em->getRepository('HTMStockBundle:Produit')->findOneById($id);
  	 $listeSalePoint = $em->getRepository('HTMStockBundle:SalePointProduct')->findByProduit($produit);
	  $admin=$this->findByRole('ROLE_SUPER_ADMIN');
		if(!$admin){
			$admin=$this->findByRole('ROLE_ADMIN');
		}
	  $admin=$em->getRepository('HTMUserBundle:User')->findOneById(1);
	  return $this->render('HTMMagasinierBundle:ProduitEnStock:listSalepoint.html.twig',array(
		  'salepoints' => $listeSalePoint,
		  'produit' => $produit,
		  'pointDeVenteId' => $admin,
	  ));
  }

	/**
	 * @Route("/supply/new/{idProduit}/{iduser}", name="make_new_supply")
	 * @Template()
	 */
	public function SupplyNewAction(Request $request,$idProduit,$iduser){
		$em = $this->getDoctrine()->getManager();
		$produit= $em->getRepository('HTMStockBundle:Produit')->findOneByid($idProduit);
		$user= $em->getRepository('HTMUserBundle:User')->findOneByid($iduser);
		$entry=new DemandeApp();
		if(!$user)
			throw  new NotFoundHttpException('Point de vente introuvable');
		if(!$produit)
			throw  new NotFoundHttpException('Produit introuvable');
		$point=$this->getUser()->getMagasinier()->getSalePoint();
		$entry->setUser($user);
		$entry->setProduit($produit);
		$entry->setPointDeVente($point);
		$form=$this->createForm(new DemandeAppType(),$entry);
		if($request->getMethod()=='POST'){
			$form->handleRequest($request);
			if($form->isValid()){
				$em->persist($entry);
				$em->flush();
				return $this->redirect($this->generateUrl('list_supply_sortie',array('idPoint'=>$point->getId())));
			}else{
				var_dump($form->getErrorsAsString(5));
				var_dump('not ok');die;
			}
		}
		return $this->render('HTMMagasinierBundle:ProduitEnStock:SupplyNew.html.twig',array(
				'form' => $form->createView()));

	}
	/**
	 * @Route("/sortie/{idPoint}", name="list_supply_sortie")
	 * @Template()
	 */
	public function SupplyIndexAction(Request $request,$idPoint){
		$em = $this->getDoctrine()->getManager();

		$point= $em->getRepository('HTMStockBundle:PointDeVente')->findOneByid($idPoint);
		if(!$point)
			throw  new NotFoundHttpException('Point de vente introuvable');
		$entities= $em->getRepository('HTMStockBundle:DemandeApp')->findByPointDeVente($point);
		return $this->render('HTMMagasinierBundle:ProduitEnStock:SupplyList.html.twig',array(
			'entities' => $entities));


	}
	/**
	 * @Route("/entre", name="list_supply_entre")
	 * @Template()
	 */
	public function SupplySortieIndexAction(Request $request){
		$em = $this->getDoctrine()->getManager();
		$entities= $em->getRepository('HTMStockBundle:DemandeApp')->findByUser($this->getUser());
		return $this->render('HTMMagasinierBundle:ProduitEnStock:SupplyListentre.html.twig',array(
			'entities' => $entities));


	}
	/**
	 * @Route("/change-statut/{id}/{statut}", name="change-statut")
	 * @Template()
	 */
	public function changeStatutAction(Request $request,$id,$statut){
		$em = $this->getDoctrine()->getManager();
		$entity= $em->getRepository('HTMStockBundle:DemandeApp')->findOneById($id);
		$entity->setStatut($statut);
		$produit=$em->getRepository('HTMStockBundle:SalePointProduct')->findOneBy(array('produit'=>$entity->getProduit(),'salePoint'=>$entity->getPointDeVente()));
		$produitPoint=$em->getRepository('HTMStockBundle:SalePointProduct')->findOneBy(array('produit'=>$entity->getProduit(),'salePoint'=>$this->getUser()->getMagasinier()->getPointDeVente()));
		$quantitePoint=$produitPoint->getQuantite()-$entity->getQuantite();
		if($quantitePoint){
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
			$produitPoint->setQuantite($quantitePoint);
			$em->flush();
		}else{
			$this->addFlash('error','Vous n\'avez pas assez de stock pour accepter la demande.' );
		}

		return $this->redirect($this->generateUrl('list_supply_entre'));


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
			->setParameter('roles', '%"'.$role.'"%');
		$qb->setMaxResults(1);
		return $qb->getQuery()->getResult();
	}

}
