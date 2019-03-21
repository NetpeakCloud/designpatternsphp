<?php

namespace DesignPatterns\Structual\Adapter;

/**
 * Interface SenderEmailInterface
 * @package DesignPatterns\Structual\Adapter
 */
interface SenderEmailInterface
{
	public function send(): bool;

	public function setTitle($title);

	public function setBody($body);

	public function setRecipient($recipient);
}
