<?php

namespace Rmphp\Foundation;

use Psr\Http\Message\RequestInterface;


interface RouterInterface {
	public function setStartPoint(string $mountPoint): void;
	public function withRules(array $rules) : void;
	public function match(RequestInterface $request) : ?array;
}