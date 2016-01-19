<?php
	// Catches errors from Apache

	require_once(__DIR__ . "/Shared/Config.php");
	require_once(__DIR__ . "/Shared/Util/Exceptions.php");

	// HTTP error code
	$code = isset($_GET["c"]) ? $_GET["c"] : 000;

	if ($code === 000)
	{
		// An error didn't actually occur, so direct them to the home page
		Header("HTTP 301 Moved Permanently");
		Header("Location: /Home.php");
	}
	else if ($FETCH_EXCEPTION_HANDLING)
	{
		// Throw an exception using the HTTP error code so our exception handler catches it
		throw new HttpException($code);
	}
	else
	{
		// We can't cause any error pages because exception handling is turned off, so just direct them to the home page
		Header("HTTP 301 Moved Permanently");
		Header("Location: /Home.php");
	}
?>