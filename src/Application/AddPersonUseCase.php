<?php

namespace App\Application;

use App\Domain\Entity\Person;
use App\Infrastructure\Repository\PersonRepository;

class AddPersonUseCase
{
	public function execute(PersonRepository $personRepository)
	{
		$newPerson = new Person();
		$newPerson->setFirstName('Jonathan');
		$newPerson->setLastName('Castro');

		$personRepository->add($newPerson, true);


		return 'Adding a FirstName and LastName';
	}
}