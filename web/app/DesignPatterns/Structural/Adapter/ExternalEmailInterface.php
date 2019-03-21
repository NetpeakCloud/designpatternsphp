<?php

namespace DesignPatterns\Structual\Adapter;

/**
 *
 * Interface ExternalEmailInterface
 * @package DesignPatterns\Structual\Adapter
 */
interface ExternalEmailInterface
{
	public function send($title, $body): bool;

	public function setRecipient($recipient);

	public function setSender($recipient);
}
