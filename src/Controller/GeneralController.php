<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class GeneralController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function app_home(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to OpenTaxi API',
        ]);
    }
}
