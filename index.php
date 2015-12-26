<?php
	$FETCH_PAGE_TITLE = "Home"; // Store this as a variable so we can refer to it multiple times
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $FETCH_PAGE_TITLE ?> | Fetch</title>
		<?php require_once('Shared/Head.php'); ?>
	</head>
	<body>
		<?php require_once('Shared/Nav.php'); ?>
		<main class="container">
			<h1>Welcome to Fetch!</h1>
			<p class="flow-text">The Scratch-inspired sharing site</p>
		</main>
		<?php require_once('Shared/Footer.php'); ?>
		<?php require_once('Shared/Scripts.php'); ?>
	</body>
</html>