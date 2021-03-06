<?php declare(strict_types = 1);

/**
 * DynamicDiscriminatorListener.php
 *
 * @copyright      More in LICENSE.md
 * @license        http://www.ipublikuj.eu
 * @author         Adam Kadlec <adam.kadlec@ipublikuj.eu>
 * @package        iPublikuj:DoctrineDynamicDiscriminatorMap!
 * @subpackage     Entities
 * @since          0.1.0
 *
 * @date           06.01.16
 */

namespace IPub\DoctrineDynamicDiscriminatorMap\Entities;

/**
 * Doctrine dynamic discriminator map entity interface
 *
 * @package        iPublikuj:DoctrineDynamicDiscriminatorMap!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@ipublikuj.eu>
 */
interface IDiscriminatorProvider
{

	/**
	 * @return string
	 */
	public function getDiscriminatorName(): string;

}
