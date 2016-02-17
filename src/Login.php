<?php
	$FETCH_PAGE_TITLE = 'Login'; // Store this as a variable so we can refer to it multiple times

	require_once(__DIR__ . '/Shared/Config.php');
	require_once(__DIR__ . '/Shared/Util/URLTransformation.php');
	require_once(__DIR__ . '/Shared/Util/Render.php');
?>
<!DOCTYPE html>
<html ng-app="Fetch">
	<head>
		<title><?php echo $FETCH_PAGE_TITLE ?> | Fetch</title>
		<?php require_once(__DIR__ . '/Shared/Partials/Head.php'); ?>
	</head>
	<body>
		<?php require_once(__DIR__ . '/Shared/Partials/Noscript.php'); ?>
		<header>
			<?php require_once(__DIR__ . '/Shared/Partials/Nav.php'); ?>
		</header>
		<main class="container">
			<section class="row">
				<form class="col s12">
					<div class="row">
						<div class="input-field col s12 m6">
							<i class="material-icons prefix">account_circle</i>
							<input type="text" class="validate" name="username">
							<label for="username">Username</label>
						</div>
						<div class="input-field col s12 m6">
							<i class="material-icons prefix">account_circle</i>
							<input type="text" class="validate" name="username">
							<label for="username">Username</label>
						</div>
					</div>
				</form>
			</section>
		</main>
		<?php require_once(__DIR__ . '/Shared/Partials/Footer.php'); ?>
		<?php require_once(__DIR__ . '/Shared/Partials/Scripts.php'); ?>
	</body>
</html>