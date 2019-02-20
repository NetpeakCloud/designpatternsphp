<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class ServiceA
 *
 * @package DesignPatterns\Creational\AbstractFactory
 */
class ServiceA implements ExportEmailInterface
{

	/**
	 * @return bool
	 */
	public function testApi()
	{
		return true;
	}

	public function sendEmail(\stdClass $user)
	{
		return [
			'success' => true,
			'email' => (string) $user->email,
		];
	}
}