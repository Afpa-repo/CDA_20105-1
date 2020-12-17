<?php

namespace App\Form;

use App\Entity\FRProducts;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FRProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('products_reference')
            ->add('products_Details')
            ->add('products_PurchasePrice')
            ->add('products_SalePrice')
            ->add('products_Picture')
            ->add('products_Stock')
            ->add('products_Visible')
            ->add('category')
            ->add('Suppliers')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FRProducts::class,
        ]);
    }
}
