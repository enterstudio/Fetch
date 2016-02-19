<?php
	require_once(__DIR__ . '/../Config.php');
	require_once(__DIR__ . '/../Util/URLTransformation.php');
	require_once(__DIR__ . '/../Util/Database.php');

	session_start();
?>
<!-- Navbar from Nav.php -->
<nav class="<?= FETCH_PRIMARY_COLOR ?> lighten-2 top-nav">
	<ul class="side-nav fixed" id="side-nav">
		<li class="logo">
			<a class="brand-logo" href="<?= URL('Home') ?>">
				Fetch
			</a>
		</li>
		<?php if (isset($_SESSION['UserId'])) { ?>
		<li class="current-user">
			<div class="row">
				<div class="col s4">
					<img src="http://lorempixel.com/400/400/cats" class="circle responsive-img">
				</div>
				<div class="col s8">
					<a href="#"><?= htmlentities(get_user($_SESSION["UserId"])["Username"]) ?></a>
					<p class="role">User</p>
				</div>
			</div>
		</li>
		<?php } ?>
		<li><a href="<?= URL('Mods') ?>" alt="Mods">Mods</a></li>
		<li><a href="<?= URL('Projects') ?>" alt="Projects">Projects</a></li>
		<li><a href="<?= URL('Login') ?>" alt="Login">Login</a></li>
	</ul>

	<div class="nav-wrapper">
		<div class="container">
			<a href="#" data-activates="side-nav" class="button-collapse"><i class="material-icons">menu</i></a>
			<a class="page-title"><?= isset($FETCH_SHORT_TITLE) ? $FETCH_SHORT_TITLE : $FETCH_PAGE_TITLE ?></a>
			<form class="search right">
				<div class="input-field">
					<input id="search" type="search" required>
					<label for="search"><i class="material-icons">search</i></label>
				</div>
			</form>
		</div>
	</div>
</nav>