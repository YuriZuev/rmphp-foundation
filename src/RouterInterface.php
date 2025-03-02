<?php

namespace Rmphp\Foundation;

use Psr\Http\Message\RequestInterface;

interface RouterInterface {

	/**
	 * @param string $mountPoint
	 */
	public function setStartPoint(string $mountPoint): void;

	/**
	 * @param array $rules
	 */
	public function withRules(array $rules) : void;

	/**
	 * @param array $rules
	 * @return void
	 */
	public function withSet(array $rules): void;

	/**
	 * @param RequestInterface $request
	 * @return array|null
	 */
	public function match(RequestInterface $request) : ?array;

	/**
	 * @param RequestInterface $request
	 * @return array|null
	 */
	public function matchByArgv(RequestInterface $request) : ?array;
}
