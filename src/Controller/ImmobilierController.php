<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImmobilierController extends AbstractController
{
    /**
     * @Route("/", name="welcome")
     */
    public function index(): Response
    {
        return $this->render('immobilier/index.html.twig');
    }

    /**
     * @Route("/search", name="welcome")
     */
    public function search(): Response
    {
        return $this->render('immobilier/search.html.twig');
    }

    /**
     * @Route("/estimate", name="welcome")
     */
    public function estimate(): Response
    {
        return $this->render('immobilier/estimate.html.twig');
    }
}
