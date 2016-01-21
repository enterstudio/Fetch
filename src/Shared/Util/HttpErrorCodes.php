<?php
// Dictionary of HTTP errors and their error codes

$FETCH_HTTP_ERROR_CODES = array(
	404 => 'Page Not Found',
	418 => 'I\'m a Teapot',
	500 => 'Internal Error'
);

// Dictionary of user-friendly error messages
$FETCH_HTTP_ERROR_DESCRIPTIONS = array(
	404 => 'The page you were looking for could not be found. Sorry!',
	418 => 'I can\'t brew coffee! I\'m a teapot!',
	500 => 'An unknown internal error occured. Sorry!'
);