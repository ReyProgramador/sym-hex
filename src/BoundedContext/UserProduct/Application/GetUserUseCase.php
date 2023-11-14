<?php

namespace App\Application;

namespace App\BoundedContext\UserProduct\Application;

use App\BoundedContext\UserProduct\Domain\Entity\UserProduct;
use App\BoundedContext\UserProduct\Infrastructure\Repository\UserProductRepository;

class GetUserProductUseCase
{
	public function execute(UserProductRepository $UserProductRepository)
	{
		$UserProducts = [];
        $UserProducts = $UserProductRepository->findAll();
        foreach ($UserProducts  as $UserProduct) {
            $UserProducts[] = $UserProduct->getFirstName();
        }    

        return $UserProducts;
	}
}