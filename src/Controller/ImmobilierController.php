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
     * @Route("/search", name="immobilier.search")
     */
    public function search(): Response
    {
        return $this->render('immobilier/search.html.twig');
    }

    /**
     * @Route("/estimate", name="immobilier.estimate")
     */
    public function estimate(): Response
    {
        return $this->render('immobilier/estimate.html.twig');
    }
}
