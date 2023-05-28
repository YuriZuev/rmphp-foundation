<?php

namespace Rmphp\Foundation\Exceptions;

use Throwable;

class AppException extends \Exception {

	public static function invalidObject($objectName) : self {
		return new self("Invalid object factory ". $objectName);
	}

	public static function emptyConfig() : self {
		return new self('Empty config');
	}

	public static function emptyAppNodes() : self {
		return new self('Empty App Nodes list');
	}
}