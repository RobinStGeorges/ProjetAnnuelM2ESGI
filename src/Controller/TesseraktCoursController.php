<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class TesseraktCoursController
{
    public function index(Environment $twig)
    {
        $content = $twig->render('Advert/cours.html.twig', ['name' => 'robin']);

        return new Response($content);
    }

}