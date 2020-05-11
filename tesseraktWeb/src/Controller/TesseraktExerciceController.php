<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Entity\Exercice;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class TesseraktExerciceController extends AbstractController
{
    /**
     * @param Environment $twig
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     *
     * @Route("/exercice")
     */
    public function show(Environment $twig)
    {
        $repository = $this->getDoctrine()->getRepository(Exercice::class);
        $listeExercices = $repository->findAll();
        $content = $twig->render('Tesserakt/Exercice/exercices.html.twig', ['listeExercices' => $listeExercices, 'title' => 'test title']);

        return new Response($content);
    }


    /**
     * @Route("/exercice/{id}", methods={"GET"})
     * @param int $id
     * @param Environment $twig
     * @return Response
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function showExerciceByIdAction(int $id, Environment $twig)
    {
        $repository = $this->getDoctrine()->getRepository(Exercice::class);
        $exercice = $repository->find($id);
        $content = $twig->render('Tesserakt/Exercice/showExercice.html.twig', ['exercice' => $exercice, 'title' => 'test title', 'id' => $id]);

        return new Response($content);
    }
}