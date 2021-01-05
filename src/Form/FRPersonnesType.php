<?php

namespace App\Form;

use App\Entity\FRPersonnes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Regex;

class FRPersonnesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('personnes_LastName', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'placeholder' => 'Entrez votre nom',
                ],
//                'constraints' => [
//                    new Regex([
//                        'pattern' => '/^[A-Za-zéèàçâêûîôäëüïö\_\-\s]+$/',
//                        'message' => 'Caractère(s) non valide(s)'
//                    ]),
//                    'help' => 'Vous devez rentrer votre nom ici',
//                ]
            ])
            ->add('personnes_Name', TextType::class, [
                'label' => 'Prénom',
                'attr' => [
                    'placeholder' => 'Entrez votre prénom',
                ],
//                'constraints' => [
//                    new Regex([
//                        'pattern' => '/^[A-Za-zéèàçâêûîôäëüïö\_\-\s]+$/',
//                        'message' => 'Caractère(s) non valide(s)'
//                    ]),
//                    'help' => 'Vous devez rentrer votre prénom ici',
//                ]
            ])
            ->add('personnes_email', TextType::class, [
                'label' => 'E-mail',
                'attr' => [
                    'placeholder' => 'Entrez votre e-mail',
                ],
            ])
//            ->add('personnes_ClientCategory')

            ->add('personnes_Password', PasswordType::class, [
                'label' => 'Mot de passe',
                'attr' => [
                    'placeholder' => 'Entrez votre mot de passe',
                ],
//                'constraints' => [
//                    new Regex([
//                        'pattern' => '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/',
//                        'message' => 'Votre mot de passe doit contenir au moins une majuscule, une minuscule et un chiffre'
//                    ]),
//                    'help' => 'Vous devez rentrer votre mot de passe ici',
//                ]
            ])
            ->add('confirm_password', PasswordType::class, [
                'label' => 'Mot de passe',
                'attr' => [
                    'placeholder' => 'Entrez de nouveau votre mot de passe',
                ],
//                'constraints' => [
//                    new Regex([
//                        'pattern' => '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/',
//                        'message' => 'Votre mot de passe doit contenir au moins une majuscule, une minuscule et un chiffre'
//                    ]),
//                    'help' => 'Vous devez retaper votre mot de passe ici',
//                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FRPersonnes::class,
        ]);
    }
}
