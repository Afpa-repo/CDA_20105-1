<?php

namespace App\Controller;

use App\Entity\FRCategory;
use App\Repository\FRCategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     * @Route("/", name="home")
     * @param FRCategoryRepository $repo
     * @return Response
     */
    public function index(FRCategoryRepository $repo): Response
    {
//        $repo = $this->getDoctrine()->getRepository(FRCategory::class);
        $categorys = $repo->findAll();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'categorys' => $categorys
        ]);
    }
}
