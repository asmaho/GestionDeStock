<?php

namespace HTM\StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request=$this->getRequest();
        $listepointDeVentes = $em->getRepository('HTMStockBundle:PointDeVente')->findAll();


        $pointDeVentes  = $this->get('knp_paginator')->paginate($listepointDeVentes,
            $request->query->get('page', 1)/*page number*/,
            2/*limit per page*/
        );
        return $this->render('HTMStockBundle::index.html.twig',array(
            'pointDeVentes' => $pointDeVentes
        ));
    }

    public function choisirLangueAction($langue = null)
{
    if($langue != null)
    {
        // On enregistre la langue en session
        $this->container->get('session')->setLocale($langue);
    }

    // on tente de rediriger vers la page d'origine
    $url = $this->container->get('request')->headers->get('referer');
    if(empty($url)) {
        $url = $this->container->get('router')->generate('htm_stock');
    }
    return new RedirectResponse($url);
}
}
