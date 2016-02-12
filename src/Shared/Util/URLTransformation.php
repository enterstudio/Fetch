<?php
/*
# URL Transformation #
Transforms a relative URL to an absolute URL

## How we work ##
1. First, We look at `$FETCH_BASE_URL` to determine what our absolute URI is
2. Then, whenever we get passed a relative URL (one without a scheme), we transform it so it is absolute,
   relative to the value of `$FETCH_BASE_URL`.

*/

require_once(__DIR__ . '/../Config.php');

if (!function_exists('http_build_url'))
{
	// Since our installation does not have http_build_url, we have to include it from another source:
	require_once(__DIR__ . '/http_build_url.php');
}

function URL($url)
{
	global $FETCH_BASE_URL;
	
	preg_replace('/\.\//', '$1', $url);

	$parsed_url = parse_url($url);
	$parsed_base = parse_url($FETCH_BASE_URL . 'placeholder.txt');
	// We append 'placeholder.txt' so that http_build_url can operate correctly

	if ($parsed_url === false)
	{
		throw new DomainException('The passed URL is badly formed.');
	}

	if (isset($_GET["noscript"])) { // Override if we're running in noscript mode (TODO: move this elsewhere)
		$parsed_base["query"] = "noscript=1";
	}

	return http_build_url($parsed_base, $parsed_url);
}