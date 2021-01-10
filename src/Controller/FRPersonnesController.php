<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\FRPersonnes;
use App\Form\FRPersonnesType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class FRPersonnesController extends AbstractController
{
    /**
     * @Route("/inscription", name="registration")
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @return Response
     */
    public function registration(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $personne = new FRPersonnes();
        $form = $this->createForm(FRPersonnesType::class, $personne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $personne->setPersonnesClient('oui');
            $personne->setPersonnesEmployee('non');
            $personne->setPersonnesEnableAccount('non');

            $hash = $encoder->encodePassword($personne, $personne->getPersonnesPassword());
            $personne->setPersonnesPassword($hash);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($personne);
            $entityManager->flush();
            return $this-> redirectToRoute('login');
        }

        return $this->render('personnes/registration.html.twig', [
            'personne' => $personne,
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("/connection", name="login")
     */
    public function login(): Response
    {
        return $this->render('personnes/login.html.twig');
    }

    /**
     * @Route("/deconnection", name="logout")
     */
    public function logout(){}
}



