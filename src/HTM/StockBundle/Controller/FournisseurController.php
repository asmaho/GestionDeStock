<?php

namespace HTM\StockBundle\Controller;
use Doctrine\DBAL\DBALException;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use HTM\StockBundle\Entity\Fournisseur;
use HTM\StockBundle\Form\FournisseurType;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Fournisseur controller.
 *
 *
 */
class FournisseurController extends Controller
{
    /**
     * Lists all Fournisseur entities.
     *
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request=$this->getRequest();
        $listefournisseurs = $em->getRepository('HTMStockBundle:Fournisseur')->findAll();

        $fournisseurs = $this->get('knp_paginator')->paginate($listefournisseurs,
            $request->query->get('page', 1)/*page number*/,
            2/*limit per page*/
        );
        return $this->render('fournisseur/index.html.twig', array(
            'fournisseurs' => $fournisseurs,
        ));
    }

    /**
     * Creates a new Fournisseur entity.
     *
     *
     */
    public function newAction(Request $request)
    {
        $fournisseur = new Fournisseur();
        $form = $this->createForm('HTM\StockBundle\Form\FournisseurType', $fournisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $fournisseur->getUser()->addRole('ROLE_FOURNISSEUR');
                $em->persist($fournisseur);
                $em->flush();

                return $this->redirectToRoute('fournisseur_show', array('id' => $fournisseur->getId()));


            }

        return $this->render('fournisseur/new.html.twig', array(
            'fournisseur' => $fournisseur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Fournisseur entity.
     *
     *
     */
    public function showAction(Fournisseur $fournisseur)
    {
        $deleteForm = $this->createDeleteForm($fournisseur);

        return $this->render('fournisseur/show.html.twig', array(
            'fournisseur' => $fournisseur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Fournisseur entity.
     *
     *
     */
    public function editAction(Request $request, Fournisseur $fournisseur)
    {
        $deleteForm = $this->createDeleteForm($fournisseur);
        $editForm = $this->createForm('HTM\StockBundle\Form\FournisseurType', $fournisseur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user=$fournisseur->getUser();
            $user->addRole('ROLE_FOURNISSEUR');
            $userManager = $this->get('fos_user.user_manager');
            $userManager->updateUser($user);
            $em->persist($fournisseur);
            $em->flush();

            return $this->redirectToRoute('fournisseur_edit', array('id' => $fournisseur->getId()));
        }

        return $this->render('fournisseur/edit.html.twig', array(
            'fournisseur' => $fournisseur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Fournisseur entity.
     *
     *
     */
    public function deleteAction(Request $request, Fournisseur $fournisseur)
    {
        $form = $this->createDeleteForm($fournisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fournisseur);
            $em->flush();
        }

        return $this->redirectToRoute('fournisseur_index');
    }

    /**
     * Creates a form to delete a Fournisseur entity.
     *
     * @param Fournisseur $fournisseur The Fournisseur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Fournisseur $fournisseur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fournisseur_delete', array('id' => $fournisseur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
