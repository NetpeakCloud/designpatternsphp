<?php

namespace DesignPatterns\Structual\Adapter;

/**
 * Class MainEmailService
 * @package DesignPatterns\Structual\Adapter
 */
class MainEmailService implements SenderEmailInterface {

	private $title;

	private $body;

	private $recipient;

	public function send(): bool
	{
		return true;
	}

	public function setTitle($title)
	{
		$this->title = (string) $title;
	}

	public function setBody($body)
	{
		$this->body = (string) $body;
	}

	public function setRecipient($recipient)
	{
		$this->recipient = (string) $recipient;
	}
}
