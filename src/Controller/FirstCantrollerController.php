<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstCantrollerController extends AbstractController
{
    #[Route('/first/cantroller', name: 'app_first_cantroller')]
    public function index(): Response
    {
        return $this->render('first_cantroller/index.html.twig', [
            'controller_name' => 'FirstCantrollerController',
        ]);
    }
}
