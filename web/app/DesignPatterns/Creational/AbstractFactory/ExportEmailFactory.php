<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * У нас есть 4 внешних ресурса который принимают email адреса,
 * они поразному инициализируется что и являеться сокрытием созданием обьекта
 *
 * Class ExportEmailFactory
 * @package DesignPatterns\Creational\AbstractFactory
 */
class ExportEmailFactory
{
	/**
	 * Сервис А не требует сложной инициализации и авторизации
	 *
	 * @return ServiceA
	 */
	public function createServiceA()
	{
		return new ServiceA();
	}

	/**
	 * Сервис B требует Обьект ресурса
	 *
	 * @param \stdClass $resource
	 * @return ServiceB
	 */
	public function createServiceB(\stdClass $resource)
	{
		return new ServiceB($resource);
	}

	/**
	 * Сервис C требует api ключ что бы создать сессию и сгенерировать токен сессии
	 *
	 * @param \stdClass $resource
	 *
	 * @return ServiceC
	 */
	public function createServiceC(\stdClass $resource)
	{
		$service = new ServiceC($resource->apiKey);
		$service->generateToken();
		return $service;
	}

	/**
	 * Сервис D требует только токен никакой авторизации и генерации нет
	 *
	 * @param \stdClass $resource
	 * @return ServiceD
	 */
	public function createServiceD(\stdClass $resource)
	{
		return new ServiceD($resource->apiToken);
	}
}
