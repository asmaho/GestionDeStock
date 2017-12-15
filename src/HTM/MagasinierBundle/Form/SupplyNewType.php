<?php

namespace HTM\MagasinierBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class SupplyNewType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          /*  ->add('quantite')
            ->getForm()*/

          ->add('produit','entity', array(
              'class'=>'HTMStockBundle:Produit',
              'label'=>'nom',
          ))
            ->add('produit','entity', array(
                'class'=>'HTMStockBundle:Produit',
                'label'=>'barCode',

            ))
            ->add('quantite', 'number', array('label' => ' ', 'required' => true))

        ;

    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => null
        ));
    }
}
