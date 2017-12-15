<?php

namespace HTM\StockBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FournisseurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array('attr' => array('class' => 'form-control')))
            ->add('prenom', 'text', array('attr' => array('class' => 'form-control')))
            ->add('user',new UserType())

            ->add('nomSociete', 'text', array('attr' => array('class' => 'form-control')))
            ->add('adresse', 'text', array('attr' => array('class' => 'form-control')))
            ->add('tel', 'number', array('attr' => array('class' => 'form-control')))
            ->add('sexe', 'choice', array('choices' => array('Masculin' => 'Masculin', 'Féminin' => 'Féminin'),
                'expanded' => true, 'data' => 'Masculin'
            ))

        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HTM\StockBundle\Entity\fournisseur'
        ));
    }
}
