<?php
// Dictionary of HTTP errors and their error codes

$FETCH_HTTP_ERROR_CODES = array(
	404 => 'Page Not Found',
	405 => 'Method Not Allowed',
	418 => 'I\'m a Teapot',
	500 => 'Internal Error'
);

// Dictionary of user-friendly error messages
$FETCH_HTTP_ERROR_DESCRIPTIONS = array(
	404 => 'The page you were looking for could not be found. Sorry!',
	405 => 'The method you were trying to use isn\'t allowed. Sorry!',
	418 => 'The resulting page may be short and stout.',
	500 => 'An unknown internal error occured. Sorry!'
);