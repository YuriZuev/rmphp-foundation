<?php

namespace Rmphp\Foundation\Exceptions;


class AppError extends \Error {

	public static function invalidRequiredObject($objectName) : self {
		return new self("Invalid required object". $objectName);
	}
}