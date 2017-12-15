<?php

namespace HTM\StockBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HTM\StockBundle\Entity\PointDeVente;
use HTM\StockBundle\Form\PointDeVenteType;

/**
 * PointDeVente controller.
 *
 */
class PointDeVenteController extends Controller
{
    /**
     * Lists all PointDeVente entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request=$this->getRequest();
        $listepointDeVentes = $em->getRepository('HTMStockBundle:PointDeVente')->findAll();

        
             $pointDeVentes  = $this->get('knp_paginator')->paginate($listepointDeVentes,
        $request->query->get('page', 1)/*page number*/,
        4/*limit per page*/
    );

        return $this->render('pointdevente/index.html.twig', array(
            'pointDeVentes' => $pointDeVentes,
        ));
    }

    /**
     * Creates a new PointDeVente entity.
     *
     */
    public function newAction(Request $request)
    {
        $pointDeVente = new PointDeVente();
        $form = $this->createForm('HTM\StockBundle\Form\PointDeVenteType', $pointDeVente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pointDeVente);
            $em->flush();

            return $this->redirectToRoute('pointdevente_show', array('id' => $pointDeVente->getId()));
        }

        return $this->render('pointdevente/new.html.twig', array(
            'pointDeVente' => $pointDeVente,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PointDeVente entity.
     *
     */
    public function showAction(PointDeVente $pointDeVente)
    {
        $deleteForm = $this->createDeleteForm($pointDeVente);

        return $this->render('pointdevente/show.html.twig', array(
            'pointDeVente' => $pointDeVente,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PointDeVente entity.
     *
     */
    public function editAction(Request $request, PointDeVente $pointDeVente)
    {
        $deleteForm = $this->createDeleteForm($pointDeVente);
        $editForm = $this->createForm('HTM\StockBundle\Form\PointDeVenteType', $pointDeVente);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pointDeVente);
            $em->flush();

            return $this->redirectToRoute('pointdevente_edit', array('id' => $pointDeVente->getId()));
        }

        return $this->render('pointdevente/edit.html.twig', array(
            'pointDeVente' => $pointDeVente,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a PointDeVente entity.
     *
     */
    public function deleteAction(Request $request, PointDeVente $pointDeVente)
    {
        $form = $this->createDeleteForm($pointDeVente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pointDeVente);
            $em->flush();
        }

        return $this->redirectToRoute('pointdevente_index');
    }

    /**
     * Creates a form to delete a PointDeVente entity.
     *
     * @param PointDeVente $pointDeVente The PointDeVente entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PointDeVente $pointDeVente)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pointdevente_delete', array('id' => $pointDeVente->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
