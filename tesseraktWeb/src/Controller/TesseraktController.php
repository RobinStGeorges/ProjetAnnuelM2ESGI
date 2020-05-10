<?php
// src/Controller/TesseraktController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TesseraktController extends AbstractController
{
    /**
     * @param Environment $twig
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     *
     * @Route("/index")
     */
    public function index(Environment $twig)
    {
        $content = $twig->render('Tesserakt/index.html.twig', ['name' => 'robin']);

        return new Response($content);
    }
}