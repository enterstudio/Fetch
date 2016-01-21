<?php

/*

## Fetch configuration ##
This file contains the main Fetch configuration! This is where you place all of your overrides
and such. For example, changing the site primary colour is simple:

```php
$FETCH_PRIMARY_COLOR = 'blue';
```

This could easily be changed to 'black', 'red', 'pink' or any colour you want.
See http://materializecss.com/color.html for all available colours.
*/

// BASE CONFIGURATION

$FETCH_BASE_URL = ''; // Set this to your base URL
// Example:
// $FETCH_BASE_URL = 'Fetch/'' // This would make absolute URL building output 'http://<host>/Fetch/<Relative URL>''

$FETCH_EXCEPTION_HANDLING = true; // If 'true', any errors will be caught and a friendly page will be displayed.
$FETCH_EXCEPTION_DEBUG = true; // If 'true', caught exceptions will be displayed. Don't enable this in a production environment!

// An array of hosts which are allowed to see debug information if $FETCH_EXCEPTION_DEBUG is enabled
// It's probably best to not add any external IPs unless required
$FETCH_ALLOWED_LOCAL_HOSTS = array(
	'localhost',
	'127.0.0.1',
	'::1'
);

// STYLING

$FETCH_PRIMARY_COLOR = 'indigo'; // The primary color of the site - coloured items will try and use this style


// SQL CONFIGURATION

$FETCH_SQL_SERVER = '127.0.0.1';
$FETCH_SQL_PORT = 3306;
$FETCH_SQL_USER = 'Fetch_SQL';
$FETCH_SQL_PASS = 'Fetch_SQL'; // CHANGE THIS IN A PRODUCTION ENVIRONMENT! 
$FETCH_SQL_DATABASE = 'Fetch'; // Request from this database


// EXTRAS

// Ensure that exception debugging is turned off for non-localhost requests
if ((!array_key_exists('REMOTE_ADDR', $_SERVER)) || (!in_array($_SERVER['REMOTE_ADDR'], $FETCH_ALLOWED_LOCAL_HOSTS))) {
	$FETCH_EXCEPTION_DEBUG = false;
}

// Define our variables as constants for easy access
define('FETCH_BASE_URL', $FETCH_BASE_URL);
define('FETCH_EXCEPTION_HANDLING', $FETCH_EXCEPTION_HANDLING);
define('FETCH_EXCEPTION_DEBUG', $FETCH_EXCEPTION_DEBUG);
define('FETCH_PRIMARY_COLOR', $FETCH_PRIMARY_COLOR);
define('FETCH_SQL_SERVER', $FETCH_SQL_SERVER);
define('FETCH_SQL_PORT', $FETCH_SQL_PORT);
define('FETCH_SQL_USER', $FETCH_SQL_USER);
define('FETCH_SQL_PASS', $FETCH_SQL_PASS);
define('FETCH_SQL_DATABASE', $FETCH_SQL_DATABASE);

if ($FETCH_EXCEPTION_HANDLING) // No need to do anything here; change $FETCH_EXCEPTION_HANDLING
{
	require_once( __DIR__ . '/Util/ErrorHandler.php');
}