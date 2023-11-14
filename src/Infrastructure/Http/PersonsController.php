<?php

// namespace App\Controller;

namespace App\Infrastructure\Http;

use App\Application\AddPersonUseCase;
use App\Infrastructure\Repository\PersonRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PersonsController extends AbstractController
{
    #[Route('/persons', name: 'app_persons')]
    // public function index(): JsonResponse
     public function index(AddPersonUseCase $addPersonUseCase, PersonRepository $personRepository): JsonResponse
    {
        // return $this->json([
        //     'message' => 'Http',
        //     'path' => 'src/Controller/PersonsController.php',
        // ]);
         return $this->json([
            'message' => 'Hi! Welcome to your new controller! '.$addPersonUseCase->execute($personRepository)
        ]);

    }
}
