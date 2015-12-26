<?php
/*
# URL Transformation #
Transforms a relative URL to an absolute URL

## How we work ==
1. First, We look at `$FETCH_BASE_URL` to determine what our absolute URI is
2. Then, whenever we get passed a relative URL (one without a scheme), we transform it so it is absolute,
   relative to the value of `$FETCH_BASE_URL`.

*/

if (!function_exists("http_build_url"))
{
	// Since our installation does not have http_build_url, we have to include it from another source:
	require_once "Shared/Util/http_build_url.php";
}

function URL($url)
{
	preg_replace("/\.\//", "$1", $url);

	require "Shared/Config.php";

	$parsed_url = parse_url($url);
	$parsed_base = parse_url($FETCH_BASE_URL . "placeholder.txt");
	// We append "placeholder.txt" so that http_build_url can operate correctly

	if ($parsed_url === false)
	{
		throw new DomainException('The passed URL is badly formed.');
	}

	return http_build_url($parsed_base, $parsed_url, HTTP_URL_JOIN_PATH);
}