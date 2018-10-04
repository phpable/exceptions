<?php
namespace Able\Exceptions\Abstractions;

use \Able\Prototypes\IStringable;
use \Able\Prototypes\TStringable;

use \Throwable;

abstract class AException extends \Exception
	implements IStringable {

	use TStringable;

	/**
	 * @var string
	 */
	protected static string $template = '%s';

	/**
	 * @var Throwable|null
	 */
	private ?Throwable $Previous = null;

	/**
	 * @param Throwable $Previous
	 */
	protected final function registerPrevious(\Throwable $Previous): void {
		$this->Previous = $Previous;
	}

	/**
	 * @param array $Arguments
	 */
	public function __construct(array $Arguments) {
		parent::__construct(sprintf(static::$template,
			...array_pad(array_filter($Arguments, function($_) {
				if ($_ instanceof Throwable) {
					$this->registerPrevious($_);

					/**
					 *  The argument list can contain a previously
					 *  caught exception.
					 *
					 * @attention The only last one given exception will be added in a trace!
					 */
					return false;
				}

				return true;
		}), preg_count('/%[^%]/', static::$template), '')), -1, $this->Previous);
	}

	/**
	 * @return string
	 */
	public final function toString(): string {
		return parent::__toString();
	}
}
