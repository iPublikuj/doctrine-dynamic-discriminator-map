<?php declare(strict_types = 1);

namespace Tests\Cases\Models;

use Doctrine\ORM\Mapping as ORM;
use IPub\DoctrineDynamicDiscriminatorMap\Entities;

/**
 * @ORM\Entity
 */
class StudentParentEntity extends AbstractEntity implements Entities\IDiscriminatorProvider
{

	/**
	 * @return string
	 */
	public function getDiscriminatorName(): string
	{
		return 'parents';
	}

}
