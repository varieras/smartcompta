<?php

namespace AE\platformBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('civilite', 'choice', array('choices' => array('Monsieur', 'Madame'), 'required'=>true, 'multiple' => false, 'expanded' => true))
            ->add('nom', 'text')
            ->add('societe', 'text')
            ->add('couriel', 'email')
            ->add('telephone', 'text')
            ->add('message', 'textarea');
    }

    public function getName()
    {
        return 'Contact';
    }
}

?>