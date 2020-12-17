<?php

namespace App\Controller;

use App\Entity\FRProducts;
use App\Form\FRProductsType;
use App\Repository\FRProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/products")
 */
class FRProductsController extends AbstractController
{
    /**
     * @Route("/", name="products_index", methods={"GET"})
     * @param FRProductsRepository $fRProductsRepository
     * @return Response
     */
    public function index(FRProductsRepository $fRProductsRepository): Response
    {
        return $this->render('products/index.html.twig', [
            'products' => $fRProductsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="products_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $fRProduct = new FRProducts();
        $form = $this->createForm(FRProductsType::class, $fRProduct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($fRProduct);
            $entityManager->flush();

            return $this->redirectToRoute('products_index');
        }

        return $this->render('products/new.html.twig', [
            'product' => $fRProduct,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="products_show", methods={"GET"})
     * @param FRProducts $fRProduct
     * @return Response
     */
    public function show(FRProducts $fRProduct): Response
    {
        return $this->render('products/show.html.twig', [
            'product' => $fRProduct,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="products_edit", methods={"GET","POST"})
     * @param Request $request
     * @param FRProducts $fRProduct
     * @return Response
     */
    public function edit(Request $request, FRProducts $fRProduct): Response
    {
        $form = $this->createForm(FRProductsType::class, $fRProduct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('products_index');
        }

        return $this->render('products/edit.html.twig', [
            'product' => $fRProduct,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="products_delete", methods={"DELETE"})
     * @param Request $request
     * @param FRProducts $fRProduct
     * @return Response
     */
    public function delete(Request $request, FRProducts $fRProduct): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fRProduct->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($fRProduct);
            $entityManager->flush();
        }

        return $this->redirectToRoute('products_index');
    }
}
