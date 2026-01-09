<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('portfolio/index.html.twig');
    }

    #[Route('/about', name: 'app_propos')]
    public function about(): Response
    {
        return $this->render('portfolio/propos.html.twig');
    }

    #[Route('/projects', name: 'app_projects')]
    public function projects(): Response
    {
        return $this->render('portfolio/projet.html.twig');
    }

    #[Route('/cv', name: 'app_cv')]
    public function contact(): Response
    {
        return $this->render('portfolio/cv.html.twig');
    }
}