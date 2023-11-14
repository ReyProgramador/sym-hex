<?php

namespace App\Application;

namespace App\BoundedContext\Product\Application;

// use App\Domain\Entity\Product;
// use App\Infrastructure\Repository\ProductRepository;

use App\BoundedContext\Product\Domain\Entity\Product;
use App\BoundedContext\Product\Infrastructure\Repository\ProductRepository;

class AddProductUseCase
{
	public function execute(ProductRepository $ProductRepository)
	{
		$newProduct = new Product();
		$newProduct->setFirstName('Jonathan');
		$newProduct->setLastName('Castro');

		$ProductRepository->add($newProduct, true);


		return 'Adding a FirstName and LastName';
	}
}