<?php

namespace DesignPatterns\Creational\AbstractFactory;

class ServiceD implements ExportEmailInterface
{
	private $apiToken;

	public function __construct($apiToken)
	{
		$this->apiToken = $apiToken;
	}

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
			'msg' => $user->name . ' ' . $user->email,
		];
	}
}