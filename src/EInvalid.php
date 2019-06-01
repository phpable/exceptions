<?php
namespace Able\Exceptions;

use \Able\Exceptions\Abstractions\AException;
use \Throwable;

class EInvalid extends AException {

	/**
	 * @var string
	 */
	protected static string $template = "Invalid value: %s!";

	/**
	 * @param string $message
	 * @param Throwable|null $Previous
	 */
	public function __construct(string $message, ?Throwable $Previous = null) {
		parent::__construct(func_get_args());
	}
}
