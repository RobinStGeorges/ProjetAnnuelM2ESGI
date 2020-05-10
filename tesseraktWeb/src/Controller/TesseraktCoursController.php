<?php
namespace App\Controller;
use App\Entity\Cours;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/cours")
 */
class TesseraktCoursController extends AbstractController
{

    /**
     * @param Environment $twig
     * @return Response
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     *
     *
     * @Route("/")
     */
    public function show(Environment $twig)
    {
        $repository = $this->getDoctrine()->getRepository(Cours::class);
        $listeCours = $repository->findAll();
        $content = $twig->render('Tesserakt/Cours/cours.html.twig', ['listeCours' => $listeCours, 'title' => 'test title']);

        return new Response($content);
    }

    /**
     * @param $id
     * @param Environment $twig
     * @return Response
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     * @Route("/{id}", methods={"GET"})
     */
    public function showCoursById($id, Environment $twig)
    {
        $repository = $this->getDoctrine()->getRepository(Cours::class);
        $cours = $repository->findBy(array('id' => $id));
        $content = $twig->render('Tesserakt/Cours/cours.html.twig', ['cours' => $cours, 'title' => 'test title']);

        return new Response($content);

    }

}