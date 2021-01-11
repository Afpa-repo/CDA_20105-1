<?php

namespace App\Controller;

use App\Entity\FRPersonnes;
use App\Form\FRPersonnesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class LogController extends AbstractController
{
    /**
     * @Route("/log", name="log")
     * @Route("/log/{log}", name="log")
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @param int $log
     * @return Response
     */
    public function index(int $log = 1, Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $personne = null;
        $title = 'Inscription';
        $form = $this->createForm(FRPersonnesType::class, $personne);
        $view = $form->createView();

        if($log === 1) {
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

                $log = 2;
            }
            $view = $form->createView();
        }

        if($log === 2){
            $title = 'Connexion';
        }

        return $this->render('log/index.html.twig', [
            'personne' => $personne,
            'controller_name' => 'Connexion',
            'form' => $view,
            'title' => $title,
            'log' => $log,
        ]);
    }

    /**
     * @Route("/deconnexion", name="logout")
     */
    public function logout(){}
}
