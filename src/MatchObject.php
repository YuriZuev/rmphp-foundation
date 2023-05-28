<?php

namespace Rmphp\Foundation;

class MatchObject {

	public string $className;
	public string $methodName;
	public array $params;

	/**
	 * @param string $className
	 * @param string $methodName
	 * @param array $params
	 */
	public function __construct(string $className = "", string $methodName="", array $params=[]) {
		$this->className = $className;
		$this->methodName = $methodName;
		$this->params = (is_array($params)) ? $params : [];
	}
}