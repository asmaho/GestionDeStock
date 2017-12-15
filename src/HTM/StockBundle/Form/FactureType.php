<?php

namespace HTM\StockBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FactureType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('quantite')
            ->add('type','Symfony\Component\Form\Extension\Core\Type\ChoiceType',array(
                 'choices'=>array('Vente' => "Vente",'Achat' => "Achat",'Perte' => "Perte",'Vole' => "Vole",'Don' => "don",)
                ))
            ->add('facturNum')
            ->add('description')
            ->add('prix')
            ->add('total')
            ->add('reference')
            ->add('adresse')
            ->getForm()
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HTM\StockBundle\Entity\Facture'
        ));
    }
}
