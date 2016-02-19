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
			<div class="row"><!-- Padding for the lazy --></div>
			<section class="row">
				<form class="col s12 m6" id="login">
					<div class="row">
						<!-- TODO: design this properly -->
						<div class="input-field col s12">
							<i class="material-icons prefix">account_circle</i>
							<input type="text" name="username" placeholder="John Doe">
							<label for="username">Username</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">vpn_key</i>
							<input type="password" name="password">
							<label for="username">Password</label>
						</div>
					</div>
					<div class="row">
						<!-- TODO: captcha? -->
					</div>
					<div class="row">
						<button class="btn waves-effect waves-light <?= FETCH_PRIMARY_COLOR ?> lighten-1" type="submit" name="action">
							Login <i class="material-icons right">lock_outline</i>
						</button>
					</div>
					<div class="row">
					</div>
				</form>
				<div class="col s12 m4 offset-m1">
					<h3>Don't share your password</h3>
					<p class="flow-text">
						Your password is the key to your profile &ndash; sharing it means
						anyone can use your profile.
					</p>
					<h5>Don't have an account?</h5>
					<p>
						<a href="<?= URL("Register") ?>" alt="Register">Create one</a>
					</p>
				</div>
			</section>
		</main>
		<?php require_once(__DIR__ . '/Shared/Partials/Footer.php'); ?>
		<?php require_once(__DIR__ . '/Shared/Partials/Scripts.php'); ?>
	</body>
</html>