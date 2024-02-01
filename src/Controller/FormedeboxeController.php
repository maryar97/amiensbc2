<?php

namespace App\Controller;

use App\Entity\Formedeboxe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormedeboxeController extends AbstractController
{
    #[Route('/formedeboxe', name: 'app_formedeboxe')]
    public function index(): Response
    {
        return $this->render('formedeboxe/index.html.twig', [
            'controller_name' => 'FormedeboxeController',
        ]);
    }

    #[Route('/detail/{id}', name: 'app_formedeboxe_detail', methods: ['GET'])]
    public function detail(Formedeboxe $id): Response
    {
        return $this->render('formedeboxe/detail.html.twig', [ 
            'formedeboxe' => $id,
        ]);
    }
}