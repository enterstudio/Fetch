<?php

// Base class for all HTTP errors

class HttpException extends Exception
{
	public $code = 500; // Http error code
	public $message = '';

	public function __construct($code, $message = null, Exception $previous = null)
	{
		parent::__construct($message, $code, $previous);
		$this->message = $message;
	}
}

// Overridden exception classes for custom errors

// HTTP 404
class Http404Exception extends HttpException 
{
	public function __construct($message = null, $previous = null)
	{
		parent::__construct(404, $message, $previous);
	}
}

// POST required
class HttpPostRequiredException extends HttpException 
{
	public function __construct($previous = null)
	{
		parent::__construct(405, "a HTTP POST required to access this", $previous);
	}
}