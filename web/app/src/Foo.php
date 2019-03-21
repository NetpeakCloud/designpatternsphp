<?php

namespace App\Acme;

use DesignPatterns\Creational\AbstractFactory\ExportEmailFactory;
use DesignPatterns\Structual\Adapter\ExternalEmailAdapter;
use DesignPatterns\Structual\Adapter\MainEmailService;
use DesignPatterns\Structual\Adapter\NoNameEmailService;

class Foo
{
	static public function abstractFactory()
	{
		$user = new \stdClass();
		$user->name = 'Ivan';
		$user->email = 'ivan@gmail.com';

		$resource = new \stdClass();
		$resource->apiKey = 'n23jk23j5n23kjn623';
		$resource->apiToken = '2f32';

		$factory = new ExportEmailFactory();

		$emailSenderA = $factory->createServiceA();
		if (true === $emailSenderA->testApi()) {
			var_dump($emailSenderA->sendEmail($user));
		}

		$emailSenderB = $factory->createServiceB($resource);
		if (true === $emailSenderB->testApi()) {
			var_dump($emailSenderB->sendEmail($user));
		}

		$emailSenderC = $factory->createServiceC($resource);
		if (true === $emailSenderC->testApi()) {
			var_dump($emailSenderC->sendEmail($user));
		}

		$emailSenderD = $factory->createServiceD($resource);
		if (true === $emailSenderD->testApi()) {
			var_dump($emailSenderD->sendEmail($user));
		}
	}

	/**
	 * Структурный шаблон / Адаптер
	 * Задача: привести интерфесы внешней библиотеки рассылки писем с внутриним сервисом в единую структуру
	 */
	static public function adapter()
	{
		$factory = new ExportEmailFactory();
		$mail = new MainEmailService();
		$mail->setBody('body');
		$mail->setTitle('title');
		$mail->setRecipient('recipient');
		var_dump($mail->send());

		$external = new NoNameEmailService();
		$adapter = new ExternalEmailAdapter($external);
		$adapter->setBody('body');
		$adapter->setTitle('title');
		$adapter->setRecipient('recipient');
		var_dump($adapter->send());
	}
}
