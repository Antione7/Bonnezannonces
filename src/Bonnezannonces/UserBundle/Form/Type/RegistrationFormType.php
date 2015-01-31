<?php
namespace Bonnezannonces\UserBundle\Form\Type;

use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends BaseType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder,$options);
        // add your custom field
        $builder->add('avatarFile','file',array('label'=>'form.avatarFile'))
                ->add('nom', null, array('label' => 'form.nom'))
                ->add('prenom', null, array('label' => 'form.prenom'));
    }
    
    public function getName()
    {
        return 'bonnezannonces_user_inscription';
    }
}