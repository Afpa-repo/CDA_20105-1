<?php

namespace App\Controller;

use App\Repository\FRCategoryRepository;
use App\Repository\FRProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     * @Route("/home/{sort}", name="homeSort")
     * @return Response
     */
    public function index($sort = 1,FRCategoryRepository $repoCate, FRProductsRepository $repoProdu): Response
    {
//        $repo = $this->getDoctrine()->getRepository(FRCategory::class);
        $categorys = $repoCate->findAll();
        $products = $repoProdu->findAll();
        $title = 'Nos nouveautés du mois';
        if($sort > 1) {
            $title = 'Nos livres les mieux notés';
        }
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'categorys' => $categorys,
            'products' => $products,
            'title' => $title,
            'sort' => $sort
        ]);
    }
}
