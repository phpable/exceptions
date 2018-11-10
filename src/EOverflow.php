<?php
namespace Able\Exceptions;

use \Able\Exceptions\Abstractions\AException;

use \Throwable;

class EOverflow extends AException {

	/**
	 * @var string
	 */
	protected static string $template = "The value is mismatched: %s expected but %s given!";

	/**
	 * @param string $expected
	 * @param string $given
	 *
	 * @param Throwable|null $Previous
	 */
	public function __construct(string $expected, string $given, ?Throwable $Previous = null) {
		parent::__construct(func_get_args());
	}
}
