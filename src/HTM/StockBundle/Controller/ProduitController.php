<?php

namespace HTM\StockBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HTM\StockBundle\Entity\Produit;
use HTM\StockBundle\Form\ProduitType;
use HTM\StockBundle\Form\RechercheType;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Produit controller.
 *
 */
class ProduitController extends Controller
{
    /**
     * Lists all Produit entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $request=$this->get('request');
        $listeproduits = $em->getRepository('HTMStockBundle:Produit')->findAll();

          $produits  = $this->get('knp_paginator')->paginate($listeproduits,
        $request->query->get('page', 1)/*page number*/,
        4/*limit per page*/
    );

        return $this->render('produit/index.html.twig', array(
            'produits' => $produits,
        ));
    }

public  function  rechercheAction(){
    $form=$this->createForm(new RechercheType());
    return $this->render('HTMStockBundle:recherche:recherche.html.twig', array(
        'form' => $form->createView()));

}
    public function rechercheTraitementAction()
    {
        $form=$this->createForm(new RechercheType());
        if($this->get('request')->getMethod()=='POST')
        {

            $form->bind($this->get('request'));

        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('HTMStockBundle:Produit')->recherche($form['recherche']->getData());

        }
        return $this->render('produit/index.html.twig', array(
            'produit' => $produit
        ));
    }

    /**
     * Creates a new Produit entity.
     *
     */
    public function newAction(Request $request)
    {

        $produit = new Produit();
        $form = $this->createForm('HTM\StockBundle\Form\ProduitType', $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$request->getSession()->getFlashBag()->set('notice', 'Message sent!');
            $em = $this->getDoctrine()->getManager();
            $produit->upload();
            $em->persist($produit);
            $em->flush();

            return $this->redirectToRoute('produit_show', array('id' => $produit->getId()));
        }

        return $this->render('produit/new.html.twig', array(
            'produit' => $produit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Produit entity.
     *
     */
    public function showAction(Produit $produit)
    {
        $deleteForm = $this->createDeleteForm($produit);

        return $this->render('produit/show.html.twig', array(
            'produit' => $produit,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Produit entity.
     *
     */
    public function editAction(Request $request, Produit $produit)
    {
        $deleteForm = $this->createDeleteForm($produit);
        $editForm = $this->createForm('HTM\StockBundle\Form\ProduitType', $produit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();

            return $this->redirectToRoute('produit_edit', array('id' => $produit->getId()));
        }

        return $this->render('produit/edit.html.twig', array(
            'produit' => $produit,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Produit entity.
     *
     */
    public function deleteAction(Request $request, Produit $produit)
    {
        $form = $this->createDeleteForm($produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($produit);
            $em->flush();
        }

        return $this->redirectToRoute('produit_index');
    }

    /**
     * Creates a form to delete a Produit entity.
     *
     * @param Produit $produit The Produit entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Produit $produit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('produit_delete', array('id' => $produit->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    public function testAction($produit)
    {
        $produit = new Produit;
        $produit->setNom(new\String);
        $produit->setBarCode(0);


        // On récupère le service validator
        $validator = $this->get('validator');

        // On déclenche la validation sur notre object
        $listErrors = $validator->validate($produit);

        // Si le tableau n'est pas vide, on affiche les erreurs
        if(count($listErrors) > 0) {
            return new Response(print_r($listErrors, true));
        } else {
            return new Response("Le produit est valide !");
        }
    }
}
