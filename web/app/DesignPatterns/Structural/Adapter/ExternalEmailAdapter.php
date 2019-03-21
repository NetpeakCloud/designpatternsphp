<?php

namespace DesignPatterns\Structual\Adapter;

/**
 * В данном случае бл реализован адаптел для внешней библиотеке "отправки письма"
 * Class ExternalEmailAdapter
 *
 * @package DesignPatterns\Structual\Adapter
 */
class ExternalEmailAdapter implements SenderEmailInterface {

	/**
	 * @var $externalEmailService ExternalEmailInterface
	 */
	private $externalEmailService;

	private $sender = 'sender@cc.net';

	private $title;

	private $body;

	/**
	 * Спомошью конструктора мы обворачиваем обьект в адаптер
	 * ExternalEmailAdapter constructor.
	 * @param ExternalEmailInterface $externalEmailService
	 */
	public function __construct(ExternalEmailInterface $externalEmailService)
	{
		$this->externalEmailService = $externalEmailService;
		$this->externalEmailService->setSender($this->sender);
	}

	/**
	 * Методы обьекта для которого пишеться адаптер могут иметь иные название или входные параменты, сообственно для этого и пишеться адаптер
	 * @return bool
	 */
	public function send(): bool
	{
		return $this->externalEmailService->send($this->title, $this->body);
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
		$this->externalEmailService->setRecipient((string) $recipient);
	}
}
