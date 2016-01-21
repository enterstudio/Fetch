<?php
	require_once(__DIR__ . '/../Config.php');
	require_once(__DIR__ . '/../Util/URLTransformation.php');
?>

<footer class="page-footer <?= FETCH_PRIMARY_COLOR ?> lighten-2">
	<div class="container">
		<div class="row">
			<div class="col m4 s12">
				<h5 class="white-text">Work in Progress!</h5>
				<p class="grey-text text-lighten-4">
					Fetch is currently a work in progress. Things may change unexpectedly or without warning.<br/>
					For the most recent updates
				</p>
			</div>
			<div class="col m4 s12">
				<h5 class="white-text">Open Source on GitHub</h5>
				<p class="grey-text text-lighten-4">
					It's easy to contribute to Fetch - just send a pull request! Any knowledge of PHP helps us expand and
					become better!
				</p>
				<a href="https://github.com/DigiTechs/Fetch" target="_blank" alt="On GitHub" class="btn <?= FETCH_PRIMARY_COLOR ?> darken-1">GitHub</a>
			</div>
			<div class="col m4 s12">
				<h5 class="white-text">Talk to us</h5>
				<p class="grey-text text-lighten-4">
					We have a Gitter chatroom setup for you to talk to us. Drop by and suggest some features or two!
				</p>
				<a href="https://gitter.im/DigiTechs/Fetch" target="_blank" alt="On Gitter" class="btn <?= FETCH_PRIMARY_COLOR ?> darken-1">Chat</a>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			&copy; <?= date('Y') ?> Fetch.
			<a class="grey-text text-lighten-4 right" href="#!">More links</a>
		</div>
	</div>
</footer>