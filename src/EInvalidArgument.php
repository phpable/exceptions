<?php
namespace Able\Exceptions;

use \Able\Exceptions\Abstractions\AException;

use \Able\Helpers\Arr;

use \Throwable;

class EInvalidArgument extends AException {

	/**
	 * @var string
	 */
	protected static string $template = "|%s|%s|";

	/**
	 * @param string $name
	 * @param Throwable|null $Previous
	 */
	public function __construct(string $name, ?Throwable $Previous = null) {
		parent::__construct(func_get_args());
	}
}
