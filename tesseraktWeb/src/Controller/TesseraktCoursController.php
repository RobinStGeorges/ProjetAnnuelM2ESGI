<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TesseraktCoursController extends AbstractController
{

    /**
     * @param Environment $twig
     * @return Response
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     *
     * @Route("/cours")
     */
    public function show(Environment $twig)
    {
            $content = $twig->render('Tesserakt/Cours/cours.html.twig', ['name' => 'robin', 'title' => 'test title']);


        return new Response($content);
    }

}