<?php

namespace DesignPatterns\Structual\Adapter;

/**
 * Сама внешняя "библиотека" которую нужно внедрить в проект
 * Class NoNameEmailService
 * @package DesignPatterns\Structual\Adapter
 */
class NoNameEmailService implements ExternalEmailInterface {

	private $sender;

	private $recipient;

	public function send($title, $body): bool
	{
		return true;
	}

	public function setRecipient($recipient)
	{
		$this->recipient = (string) $recipient;
	}

	public function setSender($sender)
	{
		$this->sender = (string) $sender;
	}
}
