<?php

namespace App\DataFixtures;

use App\Entity\FRCategory;
use App\Entity\FRProducts;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use phpDocumentor\Reflection\Types\Integer;

class CategoryFixtures extends Fixturec Seguin, 94015 Créteil
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $faker =  \Faker\Factory::create('fr_FR');
        $tabCat = array(
            'Art musique et cinéma' => array("Architecture", "Musique", "Photographie", "Cinéma", "Peinture", "Sculpture"),
            'Bandes dessinées' => array('BD & Comics','Manga'),
            'Cuisine'=> array("Cuisine du monde", " Patisseries et desserts", "Dietétique et régimes", "Cuisine régionale", "Vins et boissons"),
            'Développement personnel'=> array(),
            'Dictionnaires & langues'=> array(),
            'Droit & économie'=> array('Droit', 'Economie','Entreprise'),
            'Essais et documents'=> array(),
            'Guides pratiques'=> array(),
            'Histoire'=> array(),
            'Humour'=> array(),
            'Informatique et internet'=> array('Informatique', 'Internet'),
            'Jeunesse'=> array(),
            'Littérature'=> array('Littérature française','Littérature étrangère','Poésie'),
            'Littérature sentimentale'=> array(),
            'Policier, suspense, thrillers'=> array('Thrillers','Polars historiques','Espionnage'),
            'Religion et spiritualité'=> array(),
            'Sciences sociales'=> array('Ethnologie et anthropologie','Philosophie','Psychologie et psychanalyse','Pédagogie et éducation','Sociologie'),
            'Sciences, techniques & médecine'=> array('Médecine','Sciences de la terre, eau, environnement','Astronomie','Mathématiques'),
            'Scolaire'=> array('Ecole maternelle','Ecole primaire','Collège','Lycée','CAP BEP','Enseignement supérieur','Fiches de lecture'),
            'SF, Fantasy'=> array(),
            'Sport loisirs et vie pratique'=> array('Sports','Jardins et nature','Jeux','Loisirs créatifs et décoration','Marine nautisme'),
            'Théâtre'=> array(),
            'Tourisme et voyages'=> array(),);
        // Creation de Cat

        foreach($tabCat as $cleA => $value) {
            $category = new FRCategory();
            $category
                ->setCategoryName($cleA);
            $manager->persist($category);
            foreach($value as $value2) {
                $sCategory = new FRCategory();
                $sCategory->setCategoryName($value2)
                    ->setCategory($category);
                $manager->persist($sCategory);
            }
        }

//        $count = count($tabCat);
//        for($c = 1; $c < $count ; $c++)
//        {
//            $category = new FRCategory();
//            $category
//                ->setId($c)
//                ->setCategoryName($tabCat[$c]);
//            $manager->persist($category);
//            // Creation de sub-category
//            for($sc = 1; $sc <  random_int(2,6); $sc++)
//            {
//                $sCategory = new FRCategory();
//                $sCategory->setCategoryName($faker->word())
//                          ->setCategory($category);
//                $manager->persist($sCategory);
//                for($p = 1; $p <  random_int(2,6); $p++)
//                {
//                    $purchasePrice = $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 50);
//                    $salePrice = ($purchasePrice * 2);
//                    $width = 150;
//                    $height = $width * 3;
//                    $products = new FRProducts();
//                    $products->setProductsReference($faker->company())
//                        ->setProductsDetails('C\'est un livre de la categorie : '.$sCategory->getCategoryName())
//                        ->setProductsPurchasePrice($purchasePrice)
//                        ->setProductsSalePrice($salePrice)
//                        ->setProductsPicture($faker->imageUrl($width, $height, 'cats', true, 'Faker', true))
//                        ->setProductsStock($faker->numberBetween($min = 12, $max = 200))
//                        ->setProductsVisible(1)
//                        ->setCategory($sCategory);
//                    $manager->persist($products);
//                }
//            }
//        }
        $manager->flush();
    }
}
