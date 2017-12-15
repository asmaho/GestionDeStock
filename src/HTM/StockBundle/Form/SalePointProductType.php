<?php

namespace HTM\StockBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SalePointProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quantite','number', array('attr' => array('class' => 'form-control')))
            ->add('produit',null, array( 'class' => 'form-control','class'=>'HTMStockBundle:Produit','choice_label'=>'nom','placeholder'=>' sélectionner un produit'))
            ->add('salePoint',null, array( 'class' => 'form-control','class'=>'HTMStockBundle:PointDeVente','choice_label'=>'nomPv','placeholder'=>' sélectionner une point de vente'))

        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HTM\StockBundle\Entity\SalePointProduct'
        ));
    }
}
