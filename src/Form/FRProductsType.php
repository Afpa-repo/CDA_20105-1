<?php

namespace App\Form;

use App\Entity\FRCategory;
use App\Entity\FRProducts;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FRProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('products_reference', TextType::class, [
                'label' => 'Nom',
            ])

            ->add('products_authors', TextType::class, [
                'label' => 'Auteurs',
            ])

            ->add('products_editor', TextType::class, [
                'label' => 'Éditeur',
            ])

            ->add('products_Details', TextareaType::class, [
                'label' => 'Detail',
            ])

            ->add('products_PurchasePrice', TextType::class, [
                'label' => 'Prix d\'achat',
            ])

            ->add('products_SalePrice', TextType::class, [
                'label' => 'Prix de vente',
            ])

            ->add('products_Stock', TextType::class, [
                'label' => 'Stock',
            ])

            ->add('products_Picture', TextType::class, [
                'label' => 'nom de l\'image',
            ])

            ->add('category', EntityType::class, [
                'class' => FRCategory::class,
                'choice_label' => 'category_name',
                'label' => 'Categories',
            ])

//            ->add('Suppliers')

            ->add('products_Visible',  ChoiceType::class, [
                'choices' => [
                    'Oui' => true,
                    'Non' => false,
                ],
                'label' => 'Visible',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FRProducts::class,
        ]);
    }
}
