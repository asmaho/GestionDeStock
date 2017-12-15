<?php

namespace HTM\StockBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MagasinierType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           
            ->add('nom','text', array('attr' => array('class' => 'form-control')))
            ->add('prenom','text', array('attr' => array('class' => 'form-control')))
            ->add('user',new UserType())
            ->add('cIN','number', array('attr' => array('class' => 'form-control')))
            ->add('telephone','number', array('attr' => array('class' => 'form-control')))
            ->add('adresse','text', array('attr' => array('class' => 'form-control')))
            ->add('datenaissance','date')
            ->add('sexe','choice', array(
                'choices' => array('Homme'=>'Homme','Femme'=>'Femme'),'expanded'=>true))
            ->add('PointDeVente','entity', array('empty_value' => false,
                'class'=>'HTMStockBundle:PointDeVente',
                'choice_label'=>'nomPv',
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HTM\StockBundle\Entity\Magasinier'
        ));
    }
}
