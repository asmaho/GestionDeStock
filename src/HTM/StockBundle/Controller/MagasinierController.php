<?php

namespace HTM\StockBundle\Controller;

use Doctrine\DBAL\DBALException;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HTM\StockBundle\Entity\Magasinier;
use HTM\StockBundle\Form\MagasinierType;

/**
 * Magasinier controller.
 *
 */
class MagasinierController extends Controller
{
    /**
     * Lists all Magasinier entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request=$this->getRequest();
        $listemagasiniers = $em->getRepository('HTMStockBundle:Magasinier')->findAll();
        //dump($magasiniers);die();

        $magasiniers = $this->get('knp_paginator')->paginate($listemagasiniers,
            $request->query->get('page', 1)/*page number*/,
            1/*limit per page*/
        );
        return $this->render('magasinier/index.html.twig', array(
            'magasiniers' => $magasiniers,
        ));
    }

    /**
     * Creates a new Magasinier entity.
     *
     */
    public function newAction(Request $request)
    {
        $magasinier = new Magasinier();
        $form = $this->createForm('HTM\StockBundle\Form\MagasinierType', $magasinier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try{
                $em = $this->getDoctrine()->getManager();
                $magasinier->getUser()->addRole('ROLE_MAGASINIER');
                $em->persist($magasinier);
                $em->flush();
                return $this->redirectToRoute('magasinier_show', array('id' => $magasinier->getId()));
            }catch(DBALException $e){
                $error = new FormError("Un point de vente peut etre affecter a un seul magasinier !");
                $form->addError($error);
            }
        }

        return $this->render('magasinier/new.html.twig', array(
            'magasinier' => $magasinier,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Magasinier entity.
     *
     */
    public function showAction(Magasinier $magasinier)
    {
        $deleteForm = $this->createDeleteForm($magasinier);

        return $this->render('magasinier/show.html.twig', array(
            'magasinier' => $magasinier,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Magasinier entity.
     *
     */
    public function editAction(Request $request, Magasinier $magasinier)
    {
        $deleteForm = $this->createDeleteForm($magasinier);
        $editForm = $this->createForm('HTM\StockBundle\Form\MagasinierType', $magasinier);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user=$magasinier->getUser();
            $user->addRole('ROLE_MAGASINIER');
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');
            $userManager->updateUser($user);
            $em->persist($magasinier);
            $em->flush();

            return $this->redirectToRoute('magasinier_edit', array('id' => $magasinier->getId()));
        }

        return $this->render('magasinier/edit.html.twig', array(
            'magasinier' => $magasinier,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Magasinier entity.
     *
     */
    public function deleteAction(Request $request, Magasinier $magasinier)
    {
        $form = $this->createDeleteForm($magasinier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($magasinier);
            $em->flush();
        }

        return $this->redirectToRoute('magasinier_index');
    }

    /**
     * Creates a form to delete a Magasinier entity.
     *
     * @param Magasinier $magasinier The Magasinier entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Magasinier $magasinier)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('magasinier_delete', array('id' => $magasinier->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
