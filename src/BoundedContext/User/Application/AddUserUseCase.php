<?php

namespace App\Application;

namespace App\BoundedContext\User\Application;

// use App\Domain\Entity\User;
// use App\Infrastructure\Repository\UserRepository;

use App\BoundedContext\User\Domain\Entity\User;
use App\BoundedContext\User\Infrastructure\Repository\UserRepository;

class AddUserUseCase
{
	public function execute(UserRepository $userRepository)
	{
		$newUser = new User();
		$newUser->setFirstName('Jonathan');
		$newUser->setLastName('Castro');

		$userRepository->add($newUser, true);


		return 'Adding a FirstName and LastName';
	}
}