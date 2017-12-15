<?php

namespace HTM\StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use HTM\StockBundle\Entity\Facture;
use HTM\StockBundle\Form\FactureType;
use Symfony\Component\HttpFoundation\Response;

class FactureController extends Controller
{


    public function ajoutAction()
    {
        
         $message="Modifier une Facture";
    	$Facture = new Facture();  
    	$form=$this->createForm(new FactureType(), $Facture);

        $request=$this->getRequest();

        if($request->getMethod()=='POST'){

            $form->handleRequest($request);

    	    if ($form->isSubmitted() && $form->isValid()){

             $em = $this->getDoctrine()->getManager();
             $em->persist($Facture);
             $em->flush();
             //$message="valiiiiiiiide";

             return $this->redirectToRoute('htm_stock_Facture');
            }
        }
        return $this->render('HTMStockBundle:Facture:edit.html.twig',array(  
                             'form'=>$form->createView(),
                             'msg'=>$message,
        	)
        );
    }

    public function afficheAction(){

        $em=$this->getDoctrine()->getManager();
        $request=$this->getRequest();
        $listefactures=$em->getRepository('HTMStockBundle:Facture')->findAll();
         
          $factures  = $this->get('knp_paginator')->paginate($listefactures,
        $request->query->get('page', 1)/*page number*/,
        3/*limit per page*/
    );
        return $this->render('HTMStockBundle:Facture:facture.html.twig',array('factures'=>$factures));
    }


    public function modifierAction($id){
        $message="Modifier une Facture";
         $em = $this->getDoctrine()->getManager();

         $Facture=$em->getRepository('HTMStockBundle:Facture')->find($id);
        $form=$this->createForm(new FactureType(), $Facture);

        $request=$this->getRequest();

        if($request->getMethod()=='POST'){

            $form->handleRequest($request);

            if (  $form->isValid()){

             $em->flush();
             //$message="valiiiiiiiide";
             return $this->redirectToRoute('htm_stock_Facture');
            }
        }
        return $this->render('HTMStockBundle:Facture:edit.html.twig',array(  
                             'form'=>$form->createView(),
                             'msg'=>$message,
            )
        );
    }


    public function supprimerAction($id){


         $em = $this->getDoctrine()->getManager();

         $Facture=$em->find('HTMStockBundle:Facture',$id);

         if(!$Facture)
         {

            throw $this->createNotFoundException('Facture avec l\'id' . $id . 'n\'existe pas');
         }

         $em->remove($Facture);
         $em->flush();

         //return new Response('facture supprimer avec succsées !!!!');

         return $this->redirectToRoute('htm_stock_Facture');
    }
}
