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

$FETCH_BASE_URL = ""; // Set this to your base URL (after ip, without scheme)
// Example:
// $FETCH_BASE_URL = "Fetch/" // This would make absolute URL building output "http://<host>/Fetch/<Relative URL>"


// STYLING

$FETCH_PRIMARY_COLOR = 'indigo'; // The primary color of the site - coloured items will try and use this style


// SQL CONFIGURATION

$FETCH_SQL_SERVER = '127.0.0.1';
$FETCH_SQL_PORT = 3306;
$FETCH_SQL_USER = 'Fetch_SQL';
$FETCH_SQL_PASS = 'Fetch_SQL'; // CHANGE THIS IN A PRODUCTION ENVIRONMENT! 
$FETCH_SQL_DATABASE = 'Fetch'; // Request from this database