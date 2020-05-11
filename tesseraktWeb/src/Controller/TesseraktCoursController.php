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
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Class TesseraktCoursController
 * @package App\Controller
 *
 *
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
     * @Route("/cours", name="cours_index")
     */
    public function showAction(Environment $twig)
    {
        $repository = $this->getDoctrine()->getRepository(Cours::class);
        $listeCours = $repository->findAll();
        $content = $twig->render('Tesserakt/Cours/cours.html.twig', ['listeCours' => $listeCours, 'title' => 'test title']);

        return new Response($content);
    }


    /**
     * @Route("/cours/{id}", methods={"GET"})
     * @param int $id
     * @param Environment $twig
     * @return Response
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function showCoursByIdAction(int $id, Environment $twig)
    {
        $repository = $this->getDoctrine()->getRepository(Cours::class);
        $cours = $repository->find($id);
        $content = $twig->render('Tesserakt/Cours/showCours.html.twig', ['cours' => $cours, 'title' => 'test title', 'id' => $id]);

        return new Response($content);
    }

}