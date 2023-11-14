<?php

namespace App\Application;

namespace App\BoundedContext\UserProduct\Application;

// use App\Domain\Entity\UserProduct;
// use App\Infrastructure\Repository\UserProductRepository;

use App\BoundedContext\UserProduct\Domain\Entity\UserProduct;
use App\BoundedContext\UserProduct\Infrastructure\Repository\UserProductRepository;

class AddUserProductUseCase
{
	public function execute(UserProductRepository $UserProductRepository)
	{
		$newUserProduct = new UserProduct();
		$newUserProduct->setFirstName('Jonathan');
		$newUserProduct->setLastName('Castro');

		$UserProductRepository->add($newUserProduct, true);


		return 'Adding a FirstName and LastName';
	}
}