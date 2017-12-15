<?php

namespace HTM\StockBundle\Form;

use HTM\StockBundle\Repository\ProduitFournisseurRepository;
use HTM\StockBundle\Repository\ProduitRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitFournisseurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('produit','entity', array( 'class'=>'HTMStockBundle:Produit','choice_label'=>'nom','placeholder'=>' sélectionner un produit',
                /*'query_builder' => function(ProduitRepository  $repo) {
                return $repo->getPublishedQueryBuilder();}*/))
            ->add('fournisseur','entity', array('class'=>'HTMStockBundle:Fournisseur','choice_label'=>'nomSociete','placeholder'=>' sélectionner un fournisseur '))
            ->add('quantite','number', array('attr' => array('class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HTM\StockBundle\Entity\ProduitFournisseur'
        ));
    }
}
