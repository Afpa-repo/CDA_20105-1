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
 * @Route("/profil")
 */
class FRPersonnesController extends AbstractController
{

    /**
     * @Route("/", name="profil_index", methods={"GET"})
     */
    public function index(FRPersonnesRepository $PersonnesRepository): Response
    {
        $personne = new FRPersonnes();
        $form = $this->createForm(FRPersonnesType::class, $personne);
        $form->handleRequest($request);
        return $this->render('personnes/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/new", name="personnes_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $fRPersonne = new FRPersonnes();
        $form = $this->createForm(FRPersonnesType::class, $fRPersonne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($personne);
            $entityManager->flush();

            return $this->redirectToRoute('personnes_index');
        }

        return $this->render('personnes/new.html.twig', [
            'personne' => $fRPersonne,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}/edit", name="personnes_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, FRPersonnes $fRPersonne): Response
    {
        $form = $this->createForm(FRPersonnesType::class, $fRPersonne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('personnes_index');
        }

        return $this->render('personnes/edit.html.twig', [
            'personne' => $fRPersonne,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="personnes_delete", methods={"DELETE"})
     */
    public function delete(Request $request, FRPersonnes $fRPersonne): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fRPersonne->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($fRPersonne);
            $entityManager->flush();
        }

        return $this->redirectToRoute('personnes_index');
    }
}
