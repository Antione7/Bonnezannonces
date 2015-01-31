<?php

namespace Bonnezannonces\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnnonceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('imageFile','file',array('label'=>'Uploadez votre image'))
            ->add('description','textarea', array('attr'=> array('class'=>'form-control')))
            ->add('idCategorie', 'entity', array('label' => "choisissez votre catégorie",
                    'attr' => array('class' => 'form-control'),
                    'class' => 'Bonnezannonces\MainBundle\Entity\Categorie', 'property' => 'libelle'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bonnezannonces\MainBundle\Entity\Annonce'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bonnezannonces_mainbundle_annonce';
    }
}
