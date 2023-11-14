<?php

// namespace App\Controller;

// namespace App\Infrastructure\Http;

namespace App\BoundedContext\UserProduct\Infrastructure\Http;

// use App\Application\AddPersonUseCase;

use App\BoundedContext\UserProduct\Application\AddUserProductUseCase;
use App\BoundedContext\UserProduct\Application\GetUserProductUseCase;


 // App\BoundedContext\UserProduct
// use App\Infrastructure\Repository\PersonRepository;

 use App\BoundedContext\UserProduct\Infrastructure\Repository\UserProductRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UserProductsController extends AbstractController
{
    #[Route('/add', name: 'app_UserProducts')]
    // public function index(): JsonResponse
     public function index(AddUserProductUseCase $addUserProductUseCase, UserProductRepository $UserProductRepository): JsonResponse
    {
        // return $this->json([
        //     'message' => 'Http',
        //     'path' => 'src/Controller/PersonsController.php',
        // ]);
         return $this->json([
            'message' => 'Hi! Welcome to your new controller! '.$addUserProductUseCase->execute($UserProductRepository)
        ]);

    }

     #[Route('/UserProducts', name: 'app_UserProducts')]    
     public function findAll(GetUserProductUseCase $getUserProductUseCase, UserProductRepository $UserProductRepository): JsonResponse
    {
        
         return $this->json([
            'data' => $getUserProductUseCase->execute($UserProductRepository)
        ]);

    }
}
