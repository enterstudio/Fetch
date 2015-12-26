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

$FETCH_BASE_URL = "http://localhost/fetch/"; // Set this to your base URL (without scheme)


// STYLING

$FETCH_PRIMARY_COLOR = 'blue'; // The primary color of the site - coloured items will try and use this style


// SQL CONFIGURATION

$FETCH_SQL_USER = 'Fetch_SQL'; // Use this account to access SQL databases
$FETCH_SQL_PASS = 'Fetch_SQL'; // Change this to the password for your SQL user
$FETCH_SQL_DATABASE = 'Fetch'; // Request from this database