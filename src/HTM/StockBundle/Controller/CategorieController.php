<?php

namespace HTM\StockBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use HTM\StockBundle\Entity\Categorie;
use HTM\StockBundle\Form\CategorieType;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Categorie controller.
 *
 */
class CategorieController extends Controller
{
    /**
     * Lists all Categorie entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('HTMStockBundle:Categorie')->findAll();

        return $this->render('categorie/index.html.twig', array(
            'categories' => $categories,

        ));
    }

    /**
     * Creates a new categorie entity.
     *
     */
    public function createAction(Request $request)
    {
        $categorie = new Categorie();
        $form = $this->createCreateForm($categorie);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($categorie);
            $em->flush();

            return $this->redirect($this->generateUrl('categorie_show', array('id' => $categorie->getId())));
        }

        return $this->render('categorie/new.html.twig', array(
            'categorie' => $categorie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Categorie entity.
     *
     *
     */
    private function createCreateForm(categorie $categorie)
    {
        $form = $this->createForm(new CategorieType(), $categorie, array(
            'action' => $this->generateUrl('categorie_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Categorie entity.
     *
     */
    public function newAction()
    {
        $categorie = new categorie();
        $form = $this->createCreateForm($categorie);

        return $this->render('categorie/new.html.twig', array(
            'categorie' => $categorie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a categorie entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $categorie = $em->getRepository('HTMStockBundle:Categorie')->find($id);

        if (!$categorie) {
            throw $this->createNotFoundException('Unable to find categorie entity.');
        }


        return $this->render('categorie/show.html.twig', array(
            'categorie' => $categorie,

        ));
    }

    /**
     * Displays a form to edit an existing Categorie entity.
     *
     */
    public function editAction($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("HTMStockBundle:Categorie");
        $categorie = $repository->find($id);
        if ($categorie === null) {
            return $this->redirect($this->generateUrl('categorie_index'));
        }
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new CategorieType(), $categorie);
        $form->handleRequest($this->getRequest());

        if ($form->isValid()) {
            $data = $form->getData();
            $em->persist($data);
            $em->flush();
            return $this->redirect($this->generateUrl('categorie_index'));
        }
        return $this->render('categorie/edit.html.twig', array(
            'edit_form' => $form->createView(),
            'categorie' => $categorie));
    }

    /**
     * Creates a form to edit a categorie entity.
     *
     * @param categorie $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(categorie $categorie)
    {
        $form = $this->createForm(new CategorieType(), $categorie, array(
            'action' => $this->generateUrl('categorie_update', array('id' => $categorie->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }



    /**
     * Deletes a categorie entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HTMStockBundle:Categorie')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find categorie entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('categorie_index'));
    }

    /**
     * Creates a form to delete a categorie entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categorie_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
            ;
    }
    public function deleteeAction($id) {
        $em = $this->getDoctrine()->getManager();
        $categorie = $em->getRepository('HTMStockBundle:Categorie')->find($id);
        if (!$categorie) {
            throw $this->createNotFoundException('No entity found for id ' . $id);
        }
        $em->remove($categorie);
        $em->flush();
        return $this->redirect($this->generateUrl('categorie_index'));
    }
}
