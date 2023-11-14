<?php

// namespace App\Controller;

// namespace App\Infrastructure\Http;

namespace App\BoundedContext\Product\Infrastructure\Http;

// use App\Application\AddPersonUseCase;

use App\BoundedContext\Product\Application\AddProductUseCase;
use App\BoundedContext\Product\Application\GetProductUseCase;


 // App\BoundedContext\Product
// use App\Infrastructure\Repository\PersonRepository;

 use App\BoundedContext\Product\Infrastructure\Repository\ProductRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    #[Route('/add', name: 'app_Products')]
    // public function index(): JsonResponse
     public function index(AddProductUseCase $addProductUseCase, ProductRepository $ProductRepository): JsonResponse
    {
        // return $this->json([
        //     'message' => 'Http',
        //     'path' => 'src/Controller/PersonsController.php',
        // ]);
         return $this->json([
            'message' => 'Hi! Welcome to your new controller! '.$addProductUseCase->execute($ProductRepository)
        ]);

    }

     #[Route('/Products', name: 'app_Products')]    
     public function findAll(GetProductUseCase $getProductUseCase, ProductRepository $ProductRepository): JsonResponse
    {
        
         return $this->json([
            'data' => $getProductUseCase->execute($ProductRepository)
        ]);

    }
}
