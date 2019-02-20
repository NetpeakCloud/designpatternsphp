<?php

namespace App\Acme;

use DesignPatterns\Creational\AbstractFactory\ExportEmailFactory;

class Foo
{
	static public function init()
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
}
