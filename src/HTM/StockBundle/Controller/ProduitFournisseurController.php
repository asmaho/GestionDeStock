<?php

namespace HTM\StockBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use HTM\StockBundle\Entity\ProduitFournisseur;
use HTM\StockBundle\Form\ProduitFournisseurType;

/**
 * ProduitFournisseur controller.
 *
 * @Route("/produitfournisseur")
 */
class ProduitFournisseurController extends Controller
{
    /**
     * Lists all ProduitFournisseur entities.
     *
     * @Route("/", name="produitfournisseur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $produitFournisseurs = $em->getRepository('HTMStockBundle:ProduitFournisseur')->findAll();

        return $this->render('produitfournisseur/index.html.twig', array(
            'produitFournisseurs' => $produitFournisseurs,
        ));
    }

    /**
     * Creates a new ProduitFournisseur entity.
     *
     * @Route("/new", name="produitfournisseur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $produitFournisseur = new ProduitFournisseur();
        $form = $this->createForm('HTM\StockBundle\Form\ProduitFournisseurType', $produitFournisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($produitFournisseur);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirectToRoute('produitfournisseur_show', array('id' => $produitFournisseur->getId()));
        }

        return $this->render('produitfournisseur/new.html.twig', array(
            'produitFournisseur' => $produitFournisseur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ProduitFournisseur entity.
     *
     * @Route("/{id}", name="produitfournisseur_show")
     * @Method("GET")
     */
    public function showAction(ProduitFournisseur $produitFournisseur)
    {
        $deleteForm = $this->createDeleteForm($produitFournisseur);

        return $this->render('produitfournisseur/show.html.twig', array(
            'produitFournisseur' => $produitFournisseur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ProduitFournisseur entity.
     *
     * @Route("/{id}/edit", name="produitfournisseur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ProduitFournisseur $produitFournisseur)
    {
        $deleteForm = $this->createDeleteForm($produitFournisseur);
        $editForm = $this->createForm('HTM\StockBundle\Form\ProduitFournisseurType', $produitFournisseur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($produitFournisseur);
            $em->flush();

            return $this->redirectToRoute('produitfournisseur_edit', array('id' => $produitFournisseur->getId()));
        }

        return $this->render('produitfournisseur/edit.html.twig', array(
            'produitFournisseur' => $produitFournisseur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ProduitFournisseur entity.
     *
     * @Route("/{id}", name="produitfournisseur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ProduitFournisseur $produitFournisseur)
    {
        $form = $this->createDeleteForm($produitFournisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($produitFournisseur);
            $em->flush();
        }

        return $this->redirectToRoute('produitfournisseur_index');
    }

    /**
     * Creates a form to delete a ProduitFournisseur entity.
     *
     * @param ProduitFournisseur $produitFournisseur The ProduitFournisseur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ProduitFournisseur $produitFournisseur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('produitfournisseur_delete', array('id' => $produitFournisseur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
