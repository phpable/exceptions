<?php
namespace Able\Exceptions;

use \Able\Exceptions\Abstractions\AException;
use \Throwable;

class EUndefined extends AException {

	/**
	 * @var string
	 */
	protected static string $template = "Undefined value: %s!";

	/**
	 * @param string $name
	 * @param Throwable|null $Previous
	 */
	public function __construct(string $name, ?Throwable $Previous = null) {
		parent::__construct(func_get_args());
	}
}
