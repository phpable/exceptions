<?php
namespace Able\Exceptions;

use \Able\Exceptions\Abstractions\AException;

class EDuplicate extends AException {

	/**
	 * @var string
	 */
	protected static string $template = "The value is duplicate: %s!";

	/**
	 * @param string $name
	 * @param Throwable|null $Previous
	 */
	public function __construct(string $name, ?Throwable $Previous = null) {
		parent::__construct(func_get_args());
	}
}
