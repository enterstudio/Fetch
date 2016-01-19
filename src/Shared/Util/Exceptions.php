<?php

// Base class for all HTTP errors

class HttpException extends Exception
{
	public $code = 500; // Http error code

	public function __construct($code, $message = null, Exception $previous = null)
	{
		parent::__construct($message, $code, $previous);
	}
}

// Overridden exception classes for custom errors

class Http404Exception extends HttpException
{
	public function __construct($message = null, $previous = null)
	{
		parent::__construct(404, $message, $previous);
	}
}