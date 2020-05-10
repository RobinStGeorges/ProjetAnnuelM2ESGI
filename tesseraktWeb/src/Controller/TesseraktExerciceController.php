<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
        $content = $twig->render('Tesserakt/Exercice/exercices.html.twig', ['name' => 'robin']);

        return new Response($content);
    }

}