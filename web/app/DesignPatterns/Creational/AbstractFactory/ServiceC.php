<?php

namespace DesignPatterns\Creational\AbstractFactory;

class ServiceC implements ExportEmailInterface
{
	private $apiKey;
	private $apiToken;

	public function __construct($apiKey)
	{
		$this->apiKey = $apiKey;
	}

	/**
	 * @return bool
	 */
	public function testApi()
	{
		return $this->apiToken !== '';
	}

	public function generateToken()
	{
		$this->apiToken = md5(rand(0, 10000000));
	}

	public function sendEmail(\stdClass $user)
	{
		return [
			'success' => true,
			'msg' => $user->name,
		];
	}
}