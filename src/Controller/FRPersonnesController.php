<?php

namespace App\Controller;

use App\Entity\FRPersonnes;
use App\Form\FRPersonnesType;
use App\Repository\FRPersonnesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/f/r/personnes")
 */
class FRPersonnesController extends AbstractController
{
    /**
     * @Route("/", name="f_r_personnes_index", methods={"GET"})
     */
    public function index(FRPersonnesRepository $fRPersonnesRepository): Response
    {
        return $this->render('fr_personnes/index.html.twig', [
            'f_r_personnes' => $fRPersonnesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="f_r_personnes_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $fRPersonne = new FRPersonnes();
        $form = $this->createForm(FRPersonnesType::class, $fRPersonne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($fRPersonne);
            $entityManager->flush();

            return $this->redirectToRoute('f_r_personnes_index');
        }

        return $this->render('fr_personnes/new.html.twig', [
            'f_r_personne' => $fRPersonne,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="f_r_personnes_show", methods={"GET"})
     */
    public function show(FRPersonnes $fRPersonne): Response
    {
        return $this->render('fr_personnes/show.html.twig', [
            'f_r_personne' => $fRPersonne,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="f_r_personnes_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, FRPersonnes $fRPersonne): Response
    {
        $form = $this->createForm(FRPersonnesType::class, $fRPersonne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('f_r_personnes_index');
        }

        return $this->render('fr_personnes/edit.html.twig', [
            'f_r_personne' => $fRPersonne,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="f_r_personnes_delete", methods={"DELETE"})
     */
    public function delete(Request $request, FRPersonnes $fRPersonne): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fRPersonne->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($fRPersonne);
            $entityManager->flush();
        }

        return $this->redirectToRoute('f_r_personnes_index');
    }
}
