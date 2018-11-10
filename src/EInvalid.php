<?php
namespace Able\Exceptions;

use \Able\Exceptions\Abstractions\AException;

class EInvalid extends AException {

	/**
	 * @var string
	 */
	protected static string $template = "Invalid value: %s!";

	/**
	 * @param string $name
	 * @param Throwable|null $Previous
	 */
	public function __construct(string $name, ?Throwable $Previous = null) {
		parent::__construct(func_get_args());
	}
}
