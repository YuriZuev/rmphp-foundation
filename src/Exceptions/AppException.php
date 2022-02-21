<?php

namespace Rmphp\Foundation\Exceptions;

use Throwable;

class AppException extends \Exception {

	public function __construct($message="", $code=0, Throwable $previous=null) {
		parent::__construct($message, $code, $previous);
	}

	public static function emptyConfig() : self {
		return new self('Empty config');
	}

	public static function emptyAppNodes() : self {
		return new self('Empty App Nodes list');
	}
}