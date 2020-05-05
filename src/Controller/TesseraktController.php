<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class TesseraktController
{
    public function index(Environment $twig)
    {
        $content = $twig->render('Tesserakt/index.html.twig', ['name' => 'robin']);

        return new Response($content);
    }

}