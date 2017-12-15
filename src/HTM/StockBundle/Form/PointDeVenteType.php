<?php

namespace HTM\StockBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PointDeVenteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ->add('id')
            ->add('nomPv', 'text', array('attr' => array('class' => 'form-control')))
            ->add('gouvernorat', 'text', array('attr' => array('class' => 'form-control')))
            ->add('adress', 'text', array('attr' => array('class' => 'form-control')))
            ->add('tel', 'number', array('attr' => array('class' => 'form-control')))
            ->add('mail', 'email', array('attr' => array('class' => 'form-control')))
            

           
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HTM\StockBundle\Entity\PointDeVente'
        ));
    }
}
