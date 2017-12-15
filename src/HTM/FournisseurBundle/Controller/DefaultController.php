<?php

namespace HTM\FournisseurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('HTMFournisseurBundle::fournisseur.html.twig');
    }

     public function afficheAction()
    {
        return $this->render('HTMFournisseurBundle:Notification:affiche.html.twig');
    }
}
