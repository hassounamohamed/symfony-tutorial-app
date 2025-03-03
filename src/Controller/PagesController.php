<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class PagesController extends AbstractController
{
    #[Route('/pages', name: 'app_pages')]
    public function index()
    {
        return $this->render('index.html.twig',[
            'controller_name' => 'PagesController',
        
            
        ]);
    }
}
