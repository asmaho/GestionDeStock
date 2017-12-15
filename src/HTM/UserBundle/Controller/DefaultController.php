<?php

namespace HTM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    

     public function indexAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
 $user = $this->container->get('security.context')->getToken()->getUser();
 
 
 if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')===true)
 {
     return $this->redirect($this->generateUrl('htm_stock'));
    
 }
 
 if($this->get('security.authorization_checker')->isGranted('ROLE_MAGASINIER')===true)
 {
      return $this->redirect($this->generateUrl('htm_magasinier_homepage'));
 }
 if($this->get('security.authorization_checker')->isGranted('ROLE_FOURNISSEUR')===true)
 {
      return $this->redirect($this->generateUrl('htm_fournisseur_homepage'));
 }
}
}
