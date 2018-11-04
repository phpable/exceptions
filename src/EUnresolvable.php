<?php
namespace Able\Exceptions;

use \Able\Exceptions\Abstractions\AException;
use \Able\Helpers\Arr;

use \Throwable;

class EUnresolvable extends AException {

	/**
	 * @var string
	 */
	protected static string $template = "Unresolvable value!";

	/**
	 * @param Throwable|null $Previous
	 */
	public function __construct(?Throwable $Previous = null) {
		parent::__construct(func_get_args());
	}
}
