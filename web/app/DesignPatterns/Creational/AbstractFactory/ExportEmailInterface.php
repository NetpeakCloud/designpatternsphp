<?php

namespace DesignPatterns\Creational\AbstractFactory;

interface ExportEmailInterface
{
	public function testApi();

	public function sendEmail(\stdClass $user);
}
