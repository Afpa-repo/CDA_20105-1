<?php

namespace App\Form;

use App\Entity\FRPersonnes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FRPersonnesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('personnes_Name')
            ->add('personnes_LastName')
            ->add('personnes_ClientCategory')
            ->add('personnes_Client')
            ->add('personnes_Team')
            ->add('personnes_Employee')
            ->add('personnes_Password')
            ->add('personnes_EnableAccount')
            ->add('personnes')
            ->add('contactDetails')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FRPersonnes::class,
        ]);
    }
}
