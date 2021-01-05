<?php

namespace App\DataFixtures;

use App\Entity\FRCategory;
use App\Entity\FRProducts;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $faker =  \Faker\Factory::create('fr_FR');
        // Creation de Cat
        for($c = 1; $c <  random_int(5,10); $c++)
        {
            $category = new FRCategory();
            $category->setCategoryName($faker->word());
            $manager->persist($category);
            // Creation de sub-category
            for($sc = 1; $sc <  random_int(2,6); $sc++)
            {
                $sCategory = new FRCategory();
                $sCategory->setCategoryName($faker->word())
                          ->setCategory($category);
                $manager->persist($sCategory);
                // Creation de sub-category
                for($p = 1; $p <  random_int(2,6); $p++)
                {
                    $purchasePrice = $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 50);
                    $salePrice = ($purchasePrice * 2);
                    $width = 150;
                    $height = $width * 3;
                    $products = new FRProducts();
                    $products->setProductsReference($faker->company())
                        ->setProductsDetails('C\'est un livre de la categorie : '.$sCategory->getCategoryName())
                        ->setProductsPurchasePrice($purchasePrice)
                        ->setProductsSalePrice($salePrice)
                        ->setProductsPicture($faker->imageUrl($width, $height, 'cats', true, 'Faker', true))
                        ->setProductsStock($faker->numberBetween($min = 12, $max = 200))
                        ->setProductsVisible(1)
                        ->setCategory($sCategory);
                    $manager->persist($products);
                }
            }
        }
        $manager->flush();
    }
}
