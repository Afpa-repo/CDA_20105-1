<?php

namespace App\Controller;

use Doctrine\ORM\EntityRepository;
use App\Repository\FRProductsRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;


class HomeController extends AbstractController
{
    /**
//     * @Route("/", name="home")
     * @Route("/home", name="home")
     * @Route("/home/{sort}", name="homeSort")
     * @param FRProductsRepository $fRProductsRepository
     * @param int $sort
     * @return Response
     */
    public function index(int $sort = 1, FRProductsRepository $fRProductsRepository): Response
    {
//       $repo = $this->getDoctrine()->getRepository(FRCategory::class);
        $products = null;
        if($sort === 1) {
            $month = (int) date('m');
            $year = (int) date('Y');
            $beginDate = new \DateTimeImmutable("$year-$month-01T00:00:00");
            $endDate = $beginDate->modify('last day of this month')->setTime(23, 59, 59);
            $products = $this->findItemsCreatedBetweenTwoDates($beginDate, $endDate, $fRProductsRepository);
            $title = 'Les nouveautés du mois';
        }
        else if($sort === 2) {
            $products = $this->findItemsAverageGrade($fRProductsRepository);
            $title = 'les livres les mieux notés';
        }
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'products' => $products,
            'title' => $title,
            'sort' => $sort
        ]);
    }

    public function findItemsCreatedBetweenTwoDates(\DateTimeImmutable $beginDate, \DateTimeImmutable $endDate, FRProductsRepository $fRProductsRepository)
    {
        return $fRProductsRepository->createQueryBuilder('Products')
            ->where("Products.products_DateAdded > ?1")
            ->andWhere("Products.products_DateAdded < ?2")
            ->setParameter(1, $beginDate)
            ->setParameter(2, $endDate)
            ->getQuery()
            ->getResult();
    }

    public function findItemsAverageGrade(FRProductsRepository $fRProductsRepository)
    {
        return $fRProductsRepository->createQueryBuilder('Products')
            ->where("Products.products_AverageGrade > 3")
            ->getQuery()
            ->getResult();
    }
}
