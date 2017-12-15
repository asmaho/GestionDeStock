<?php

namespace HTM\StockBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HTM\StockBundle\Entity\SalePointProduct;
use HTM\StockBundle\Form\SalePointProductType;

/**
 * SalePointProduct controller.
 *
 */
class SalePointProductController extends Controller
{
    /**
     * Lists all SalePointProduct entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $salePointProducts = $em->getRepository('HTMStockBundle:SalePointProduct')->findAll();

        return $this->render('salepointproduct/index.html.twig', array(
            'salePointProducts' => $salePointProducts,
        ));
    }

    /**
     * Creates a new SalePointProduct entity.
     *
     */
    public function newAction(Request $request)
    {
        $salePointProduct = new SalePointProduct();
        $form = $this->createForm('HTM\StockBundle\Form\SalePointProductType', $salePointProduct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($salePointProduct);
            $em->flush();

            return $this->redirectToRoute('salepointproduct_show', array('id' => $salePointProduct->getId()));
        }

        return $this->render('salepointproduct/new.html.twig', array(
            'salePointProduct' => $salePointProduct,
            'form' => $form->createView(),
        ));
    }
    /**
     * Finds and displays a SalePointProduct entity.
     *
     */
    public function showAction(SalePointProduct $salePointProduct)
    {
        $deleteForm = $this->createDeleteForm($salePointProduct);

        return $this->render('salepointproduct/show.html.twig', array(
            'salePointProduct' => $salePointProduct,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing SalePointProduct entity.
     *
     */
    public function editAction(Request $request, SalePointProduct $salePointProduct)
    {
        $deleteForm = $this->createDeleteForm($salePointProduct);
        $editForm = $this->createForm('HTM\StockBundle\Form\SalePointProductType', $salePointProduct);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($salePointProduct);
            $em->flush();

            return $this->redirectToRoute('salepointproduct_edit', array('id' => $salePointProduct->getId()));
        }

        return $this->render('salepointproduct/edit.html.twig', array(
            'salePointProduct' => $salePointProduct,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a SalePointProduct entity.
     *
     */
    public function deleteAction(Request $request, SalePointProduct $salePointProduct)
    {
        $form = $this->createDeleteForm($salePointProduct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($salePointProduct);
            $em->flush();
        }

        return $this->redirectToRoute('salepointproduct_index');
    }

    /**
     * Creates a form to delete a SalePointProduct entity.
     *
     * @param SalePointProduct $salePointProduct The SalePointProduct entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SalePointProduct $salePointProduct)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('salepointproduct_delete', array('id' => $salePointProduct->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
