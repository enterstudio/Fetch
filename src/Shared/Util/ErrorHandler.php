<?php

require_once(__DIR__ . '/../Config.php');
require_once(__DIR__ . '/Exceptions.php');
require_once(__DIR__ . '/HttpErrorCodes.php');

ob_start(); // Start output buffering so that if we need to we can send another page entirely

// Handles errors from user-space
function ErrorHandler($level, $message, $file, $line, $context = NULL)
{
	ExceptionHandler(new ErrorException($message, 0, $level, $file, $line));
}

// Handles errors from exceptions
function ExceptionHandler(Exception $e)
{
	global $FETCH_HTTP_ERROR_CODES;
	global $FETCH_HTTP_ERROR_DESCRIPTIONS;

	ob_end_clean(); // Clean the buffer and stop buffering

	if ($e instanceof HttpException)
	{
		$code = $e->code;

		$title_exists = isset($FETCH_HTTP_ERROR_CODES[$code]);

		$FETCH_PAGE_TITLE = $title_exists ? $FETCH_HTTP_ERROR_CODES[$code] : $FETCH_HTTP_ERROR_CODES[500];
		$FETCH_ERROR_DESCRIPTION = $title_exists ? $FETCH_HTTP_ERROR_DESCRIPTIONS[$code] : $FETCH_HTTP_ERROR_DESCRIPTIONS[500];
		$FETCH_ERROR_EXCEPTION = $e;
		$FETCH_ERROR_CODE = $code;

		if (!$title_exists)
		{
			$code = 500;
		}

		http_response_code($code);

		$already_included = require_once(__DIR__ . '/../ErrorPage.php');

		if ($already_included === true)
		{
			error_log($FETCH_ERROR_EXCEPTION);

			die('<!DOCTYPE html><html><head><title>Fatal Error | Fetch</title></head><body><h1>A fatal error has occured</h1><p>We\'re sorry. Try going to a different page.</p></body></html>');
		}
	}
	else
	{
		$code = 500;

		$title_exists = isset($FETCH_HTTP_ERROR_CODES[$code]);

		$FETCH_PAGE_TITLE = $title_exists ? $FETCH_HTTP_ERROR_CODES[$code] : $FETCH_HTTP_ERROR_CODES[500];
		$FETCH_ERROR_DESCRIPTION = $title_exists ? $FETCH_HTTP_ERROR_DESCRIPTIONS[$code] : $FETCH_HTTP_ERROR_DESCRIPTIONS[500];
		$FETCH_ERROR_EXCEPTION = $e;
		$FETCH_ERROR_CODE = $code;

		$already_included = require_once(__DIR__ . '/../ErrorPage.php');

		if ($already_included === true)
		{
			error_log($FETCH_ERROR_EXCEPTION);

			die('<!DOCTYPE html><html><head><title>Fatal Error | Fetch</title></head><body><h1>A fatal error has occured</h1><p>We\'re sorry. Try going to a different page.</p></body></html>');
		}
	}
}


// Checks for fatal exceptions on PHP exit
function FatalCheck()
{
	$error = error_get_last();
	if ($error['type'] == E_ERROR)
	{
		ErrorHandler($error['type'], $error['message'], $error['file'], $error['line']);
	}
}


// Register error handlers

register_shutdown_function( 'FatalCheck' );
set_error_handler( 'ErrorHandler' );
set_exception_handler( 'ExceptionHandler' );

ini_set( 'display_errors', 'off' ); // Don't display errors to the user
error_reporting( E_ALL ); // Catch all errors