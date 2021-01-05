<?php

namespace App\Controller;


use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\FRPersonnes;
use App\Form\FRPersonnesType;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request) : Response
    {
        $personne = new FRPersonnes();
        $form = $this->createForm(FRPersonnesType::class, $personne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($personne);
            $entityManager->flush();
        }

        return $this->render('security/registration.html.twig', [
            'personne' => $personne,
            'form' => $form->createView()
        ]);
    }
}


