<?php

// Renders content such as JavaScript and CSS files

if (function_exists('mime_content_type'))
{
	// We support mime_content_type() - use this because it's better

	function render_file($file_location)
	{
		$content_type = mime_content_type($file_location);

		// Support badly-configured systems
		if ($content_type === "application/javascript" || $content_type === "text/javascript")
		{
			return "<script type=\"text/javascript\" src=\"$file_location\"></script>";
		}
		elseif ($content_type === "text/css")
		{
			return "<link href=\"$file_location\" rel=\"stylesheet\">";
		}
		else
		{
			trigger_error("Unknown MIME type '$content_type' when trying to render '$file_location'");
		}
	}
}
else
{
	// We do not support mime_content_type() - use pathinfo() for matching file extension
	function render_file($file_location)
	{
		$path_parts = pathinfo($file_location);
		$extension = isset($path_parts['extension']) ? $path_parts['extension'] : '';

		if ($extension === "js")
		{
			return "<script type=\"text/javascript\" src=\"$file_location\"></script>";
		}
		elseif ($extension === "css")
		{
			return "<link href=\"$file_location\" rel=\"stylesheet\">";
		}
		else
		{
			trigger_error("Unknown file extension '$extension' when trying to render '$file_location'");
		}
	}
}