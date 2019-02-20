<?php

namespace DesignPatterns\Creational\AbstractFactory;

class ServiceB implements ExportEmailInterface
{
	private $resource;

	public function __construct(\stdClass $resource)
	{
		$this->resource = $resource;
	}

	/**
	 * @return bool
	 */
	public function testApi()
	{
		return $this->resource->apiKey === 1;
	}

	public function sendEmail(\stdClass $user)
	{
		return [
			'success' => false,
			'msg' => 'Incorrect email',
		];
	}
}