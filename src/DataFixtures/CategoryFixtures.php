<?php

namespace App\DataFixtures;

use App\Entity\FRCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $category = new FRCategory();
        $category->setCategoryName("Romans");
        $manager->persist($category);
        $id = $category->getId();
        $category = new FRCategory();
        $category->setCategoryName("Polars");
        $category->setCategory($id);
        $manager->persist($category);
        $category = new FRCategory();
        $category->setCategoryName("Bandes dessinées");
        $manager->persist($category);
        $category = new FRCategory();
        $category->setCategoryName("Jeunesses");
        $manager->persist($category);
        $category = new FRCategory();
        $category->setCategoryName("Scolaire et études");
        $manager->persist($category);
        $category = new FRCategory();
        $category->setCategoryName("Santé et bien-être");
        $manager->persist($category);
        $category = new FRCategory();
        $category->setCategoryName("E-Book");
        $manager->persist($category);

        $manager->flush();

    }
}
