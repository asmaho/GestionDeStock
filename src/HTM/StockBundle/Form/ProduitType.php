<?php

namespace HTM\StockBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormError;

class ProduitType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('nom', 'text', array('attr' => array('class' => 'form-control')))
            
            ->add('barCode', 'number', array('attr' => array('class' => 'form-control')))
            ->add('quantiteStock', 'number', array('attr' => array('class' => 'form-control')))
            ->add('quantiteMin', 'number', array('attr' => array('class' => 'form-control')))
            ->add('price', 'number', array('attr' => array('class' => 'form-control')))
            ->add('categorie','entity', array( 'class' => 'form-control','class'=>'HTMStockBundle:Categorie','choice_label'=>'nom','placeholder'=>'Veuillez sélectionner une catégorie'))
            ->add('file','file',array ('attr' => (array('class' =>'uploader'))))
            ->add('description', 'textarea', array('attr' => array('class' => 'ckeditor')))
          /*  ->add('facture','entity', array(
                'class'=>'HTMStockBundle:Facture',
                'choice_label'=>'reference',
                'multiple'=>true
                ))*/
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HTM\StockBundle\Entity\Produit'
        ));
    }

    public function getName()
    {
        return 'produit'; // TODO: Change the autogenerated stub
    }
}