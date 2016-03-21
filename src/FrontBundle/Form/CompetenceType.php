<?php

namespace FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CompetenceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('droitCivilEtFamilial')
            ->add('droitPenal')
            ->add('droitDeLimmobilier')
            ->add('droitDeTravail')
            ->add('droitDesEntreprises')
            ->add('droitDesEtrangers')
            ->add('droitDeLaConsommation')
            ->add('droitCommercial')
            ->add('droitDeLaProprieteIntellectuelle')
            ->add('droitInternational')
            ->add('droitAdministratif')
            ->add('droitDeLaSante')
            ->add('droitDesNouvellesTechnologies')
            ->add('droitComptableEtFiscal')
            ->add('droitBancaire')
            ->add('droitDeLimageEtPresse')
            ->add('droitDesTransports')
            ->add('droitDeLenvironnement')
            ->add('droitDuSport')
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FrontBundle\Entity\Competence'
        ));
    }
}
