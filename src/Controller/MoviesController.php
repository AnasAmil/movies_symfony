<?php

namespace App\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{

    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {

        // findAll() - SELECT * from movies;
        // find() - SELECT * from movies WHERE id=5;
        // findBy() - SELECT * from movies ORDER BY id DESC;
        // findOneBy() - SELECT * from movies WHERE id=5 AND title = 'The Dark Knight' ORDER BY id DESC;
        // count() - SELECT COUNT() from movies WHERE id=5;


        return $this->render('index.html.twig');
    }
}
