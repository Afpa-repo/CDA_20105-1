<?php

namespace App\Controller;

use App\Entity\FRCategory;
use App\Repository\FRCategoryRepository;
use App\Repository\FRPersonnesRepository;
use App\Repository\FRProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     * @Route("/", name="home")
     *
     * @return Response
     */
    public function index(FRCategoryRepository $repoCate, FRProductsRepository $repoProdu): Response
    {
//        $repo = $this->getDoctrine()->getRepository(FRCategory::class);
        $categorys = $repoCate->findAll();
        $products = $repoProdu->findAll();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'categorys' => $categorys,
            'products' => $products
        ]);
    }
}
