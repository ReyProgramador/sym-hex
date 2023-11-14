<?php

// namespace App\Controller;

namespace App\Infrastructure\Http;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PersonsController extends AbstractController
{
    #[Route('/persons', name: 'app_persons')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Http',
            'path' => 'src/Controller/PersonsController.php',
        ]);
    }
}
