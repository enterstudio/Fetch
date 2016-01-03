<?php
	require "Shared/Config.php";
	require_once "Shared/Util/URLTransformation.php";
?>
<!-- Navbar from Nav.php -->
<nav class="<?= $FETCH_PRIMARY_COLOR ?> lighten-2">
	<div class="nav-wrapper container">
		<a href="#" class="brand-logo">Fetch</a>
		<a href="#" data-activates="nav-mobile" id="nav-collapse-button" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul id="nav-desktop" class="right hide-on-med-and-down">
			<li><a href="<?= URL("Mods") ?>">Mods</a></li>
			<li><a href="<?= URL("Projects") ?>">Projects</a></li>
		</ul>
		<ul id="nav-mobile" class="side-nav">
			<li><a href="<?= URL("Mods") ?>">Mods</a></li>
			<li><a href="<?= URL("Projects") ?>">Projects</a></li>
		</ul>
	</div>
</nav>