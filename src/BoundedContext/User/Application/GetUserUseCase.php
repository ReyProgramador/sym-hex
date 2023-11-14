<?php

namespace App\Application;

namespace App\BoundedContext\User\Application;

use App\BoundedContext\User\Domain\Entity\User;
use App\BoundedContext\User\Infrastructure\Repository\UserRepository;

class GetUserUseCase
{
	public function execute(UserRepository $userRepository)
	{
		$users = [];
        $users = $userRepository->findAll();
        // foreach ($users  as $user) {
        //     $users[] = $user->getFirstName();
        // } 

        //  $users = $userRepository->findAll();
        // $data = [];

        // foreach ($users as $user) {

        //     $data[] = [
        //         'id' => $user->getId(),
        //         'first_name' => $user->getFirstName(),
        //         'last_name' => $user->getLastName(),
        //         'email' => $user->getEmail()
        //     ];
        // }   

        return $users;
	}
}