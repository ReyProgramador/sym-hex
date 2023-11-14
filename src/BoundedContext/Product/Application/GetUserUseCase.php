<?php

namespace App\Application;

namespace App\BoundedContext\Product\Application;

use App\BoundedContext\Product\Domain\Entity\Product;
use App\BoundedContext\Product\Infrastructure\Repository\ProductRepository;

class GetProductUseCase
{
	public function execute(ProductRepository $ProductRepository)
	{
		$Products = [];
        $Products = $ProductRepository->findAll();
        foreach ($Products  as $Product) {
            $Products[] = $Product->getFirstName();
        }    

        return $Products;
	}
}