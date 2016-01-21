<?php
	require_once(__DIR__ . '/../Config.php');
	require_once(__DIR__ . '/../Util/URLTransformation.php');
?>
<!-- Navbar from Nav.php -->
<nav class="<?= FETCH_PRIMARY_COLOR ?> lighten-2">
	<div class="nav-wrapper container">
		<a href="<?= URL('Home') ?>" class="brand-logo left">Fetch</a>
		<ul id="nav-mobile" class="right hide-on-large-only">
			<li><a href="<?= URL('Mods') ?>" alt="Mods" class="tooltipped" data-position="bottom" data-delay="500" data-tooltip="Mods"><i class="material-icons">extension</i></a></li>
			<li><a href="<?= URL('Projects') ?>" alt="Projects" class="tooltipped" data-position="bottom" data-delay="500" data-tooltip="Projects"><i class="material-icons">code</i></a></li>
			<li><a href="<?= URL('Login') ?>" alt="Login" class="tooltipped" data-position="bottom" data-delay="500" data-tooltip="Login"><i class="material-icons">account_circle</i></a></li>
		</ul>
		<ul id="nav-desktop" class="right hide-on-med-and-down">
			<li><a href="<?= URL('Mods') ?>" alt="Mods">Mods</a></li>
			<li><a href="<?= URL('Projects') ?>" alt="Projects">Projects</a></li>
			<li><a href="<?= URL('Login') ?>" alt="Login">Login</a></li>
		</ul>
	</div>
</nav>