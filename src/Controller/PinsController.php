<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PinsController extends AbstractController
{
    /**
     * @Route("/pins", name="pins.index")
     */
    public function index(): Response
    {
        return $this->render('pins/index.html.twig');
    }

    /**
     * @Route("/pins/create", name="pins.create")
     */
    public function create(): Response
    {

        $pin = new Pin ;

        $formBuilder = $this->createFormBuilder($pin);



        return $this->render('pins/create.html.twig');
    }
}
