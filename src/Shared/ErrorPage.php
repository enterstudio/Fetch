<?php
	require_once(__DIR__ . '/Config.php');
	require_once(__DIR__ . '/Util/URLTransformation.php');
	require_once(__DIR__ . '/Util/Render.php');
	require_once(__DIR__ . '/Util/Exceptions.php');

	$FETCH_SHORT_TITLE = "Error";
?>
<!DOCTYPE html>
<html ng-app="Fetch">
	<head>
		<title><?php echo $FETCH_PAGE_TITLE ?> | Fetch</title>
		<?php require_once(__DIR__ . '/Partials/Head.php'); ?>
	</head>
	<body>
		<?php require_once(__DIR__ . '/Partials/Noscript.php'); ?>
		<header>
			<?php require_once(__DIR__ . '/Partials/Nav.php'); ?>
		</header>
		<main class="container">
			<section class="row">
				<div class="col s12">
					<h1><?= $FETCH_PAGE_TITLE ?></h1>
					<p class="flow-text"><?= $FETCH_ERROR_DESCRIPTION ?></p>
				</div>
			</section>
			<section class="row">
				<div class="col s12">
					<h3>Additional Information</h3>
				<?php if(($FETCH_ERROR_EXCEPTION instanceof HttpException) and file_exists(__DIR__ . "/Partials/Errors/{$FETCH_ERROR_CODE}.php")) {
					require_once(__DIR__ . "/Partials/Errors/{$FETCH_ERROR_CODE}.php");
				} else { ?>
					<p class="flow-text">
						Unfortuantely, there is no additional information for the error you are experiencing.
						All we have is this flimsy little HTTP error code: <?= $FETCH_ERROR_CODE ?>
					</p>
				<?php } ?>
				</div>
			</section>
			<?php if(FETCH_EXCEPTION_DEBUG && $FETCH_ERROR_CODE >= 500 && $FETCH_ERROR_CODE < 600) { // inside server error range?>
			<section class="row">
				<div class="col s12">
					<h3>Exception Info (Debug)</h3>
					<p class="flow-text">
						If you're seeing this, don't worry - it's just internal information about what happened.<br/>
						However, if you're seeing this in a production environment, we probably forgot to turn off debug mode!<br/>
						You best tell us - this should not be turned on a production environment!
					</p>
				</div>
				<div class="col s12">
					<h4>Exception object:</h4>
					<pre><code><?php var_dump($FETCH_ERROR_EXCEPTION) ?></code></pre>
				</div>
				<div class="col s12">
					<h4>Miscellaneous information:</h4>
					<table>
						<tbody>
							<tr>
								<td>PHP Version</td>
								<td><?= phpversion() ?></td>
							</tr>
							<tr>
								<td>Zend Version</td>
								<td><?= defined('zendversion') ? zendversion() : 'Not Installed' ?></td>
							</tr>
							<tr>
								<td>PHP extensions</td>
								<td><code><?= implode(', ', get_loaded_extensions()) ?></code></td>
							</tr>
							<tr>
								<td>Operating System</td>
								<td><?= php_uname('s r') ?></td>
							</tr>
							<tr>
								<td>Processor Type</td>
								<td><?= php_uname('m') ?></td>
							</tr>
							<tr>
								<td>HTTP Server</td>
								<td><?= defined($_SERVER['SERVER_SIGNATURE']) ? $_SERVER['SERVER_SIGNATURE'] : 'Unknown' ?></td>
							</tr>
							<tr>
								<td>Fetch base URL</td>
								<td><code><?php var_dump(FETCH_BASE_URL); ?></code></td>
							</tr>
						</tbody>
					</table>
				</div>
			</section>
			<?php } else {?>
			<?php } ?>
		</main>
		<?php require_once(__DIR__ . '/Partials/Footer.php'); ?>
		<?php require_once(__DIR__ . '/Partials/Scripts.php'); ?>
	</body>
</html>