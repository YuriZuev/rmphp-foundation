<?php

namespace Rmphp\Foundation;

class MatchObject {

	public string $className;
	public string $methodName;
	public array $params;

	public function __construct($className = "", $methodName="", $params=null) {
		$this->className = $className;
		$this->methodName = $methodName;
		$this->params = (is_array($params)) ? $params : [];
	}
}