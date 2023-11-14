<?php

// namespace App\Controller;

// namespace App\Infrastructure\Http;

namespace App\BoundedContext\User\Infrastructure\Http;

// use App\Application\AddPersonUseCase;

use App\BoundedContext\User\Application\AddUserUseCase;
use App\BoundedContext\User\Application\GetUserUseCase;


 // App\BoundedContext\User
// use App\Infrastructure\Repository\PersonRepository;

 use App\BoundedContext\User\Infrastructure\Repository\UserRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    #[Route('/add', name: 'app_users')]
    // public function index(): JsonResponse
     public function index(AddUserUseCase $addUserUseCase, UserRepository $userRepository): JsonResponse
    {
        // return $this->json([
        //     'message' => 'Http',
        //     'path' => 'src/Controller/PersonsController.php',
        // ]);
         return $this->json([
            'message' => 'Hi! Welcome to your new controller! '.$addUserUseCase->execute($userRepository)
        ]);

    }

     #[Route('/users', name: 'app_users')]    
     public function findAll(GetUserUseCase $getUserUseCase, UserRepository $userRepository): JsonResponse
    {
        
         return $this->json([
            'data' => $getUserUseCase->execute($userRepository)
        ]);

    }
}
