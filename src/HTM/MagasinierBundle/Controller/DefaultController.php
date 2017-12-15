<?php

namespace HTM\MagasinierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    
    public function indexAction()
    {

        {
           /* $repository = $this->getDoctrine()->getManager()->getRepository('HTMStockBundle:SalePointProduct');
            $qbr = $repository->createQueryBuilder('t');
            $qbr->select('count(t.id)');*/



            $em = $this->getDoctrine()->getManager();
            $request=$this->getRequest();
            $listepointDeVentes = $em->getRepository('HTMStockBundle:PointDeVente')->findAll();


            $pointDeVentes  = $this->get('knp_paginator')->paginate($listepointDeVentes,
                $request->query->get('page', 1)/*page number*/,
                2/*limit per page*/
            );
            return $this->render('HTMMagasinierBundle::magasinier.html.twig',array(
                'pointDeVentes' => $pointDeVentes));
        }

    }

}
