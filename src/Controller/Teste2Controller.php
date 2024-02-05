<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Teste2Controller extends AbstractController
{
    #[Route('/teste2', name: 'app_teste2')]
    public function index(): Response
    {
        return $this->render('full/login_advanced.html.twig', [
            'controller_name' => 'Teste2Controller',
        ]);
    }
}
