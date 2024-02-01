<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaController extends AbstractController
{
    #[Route('/ba', name: 'app_ba')]
    public function index(): Response
    {
        return $this->render('ba/index.html.twig', [
            'controller_name' => 'BaController',
        ]);
    }
}
