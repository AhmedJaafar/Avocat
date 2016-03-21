<?php

namespace FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;




class InformationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('statut', ChoiceType::class, array(
            'choices' => array('Maître' => 'Maître' , 'Etude' => 'Etude', 'Capinet' => 'Capinet'),
            'choices_as_values' => true,))
            ->add('civilite', ChoiceType::class, array(
            'choices' => array('Mr.' => 'Mr.' , 'Mme.' => 'Mme.',),
            'choices_as_values' => true,))
            ->add('nom')
            ->add('prenom')
            ->add('description')
            ->add('titre', ChoiceType::class, array(
            'choices' => array('Avocat à la cour' => 'Avocat à la cour' , 'Huissier de justice' => 'Huissier de justice', 'Notaire' => 'Notaire'),
            'choices_as_values' => true,))
            ->add('telephone')
            ->add('fax')
            ->add('codepostal')
            ->add('adresse')
            ->add('gouvernorats', EntityType::class, array(
            'class' => 'FrontBundle:Gouvernorats',
            'choice_label' => 'gouvernorat'
             ))
           ->add('villes', 'choice', array('empty_value' => '', 'required' => false, 'label' => 'Ville : ')) 

            ->add('save', SubmitType::class, array('label' => 'Create Task'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FrontBundle\Entity\Information'
        ));
    }
}
