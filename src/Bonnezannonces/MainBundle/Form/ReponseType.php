<?php

namespace Bonnezannonces\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReponseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array('label' => "Votre nom",
            'attr' => array('class' => 'form-control')))
            ->add('email','email',array('label'=>'Votre email'))
            ->add('message','textarea', array('attr'=> array('class'=>'form-control')))
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bonnezannonces\MainBundle\Entity\Reponse'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bonnezannonces_mainbundle_reponse';
    }
}