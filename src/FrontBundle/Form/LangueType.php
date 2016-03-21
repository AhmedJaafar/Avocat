<?php

namespace FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class LangueType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('arabe')
            ->add('anglais')
            ->add('francais')
            ->add('chinois')
            ->add('espagnol')
            ->add('finladais')
            ->add('grec')
            ->add('italien')
            ->add('norvegiens')
            ->add('portugais')
            ->add('russe')
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FrontBundle\Entity\Langue'
        ));
    }
}
