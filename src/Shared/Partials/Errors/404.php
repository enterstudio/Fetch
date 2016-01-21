<?php
	$target = substr(strtok($_SERVER['REQUEST_URI'],'?'), 1);
	$target_safe = htmlentities($target);
	$target_search = urlencode($target);
?>
<p class="flow-text">The page you were looking for, &apos;<code><?= $target_safe ?></code>&apos; couldn't be found on our servers.<br/>
Don't lose hope just yet, though! There may still be an option:</p>
<blockquote class="flow-text">
	<ul>
		<li><a href="<?= URL('Home'); ?>">Go home</a></li>
		<li><a href="<?= URL("Search?query=$target_search"); ?>">Search for &apos;<code><?= $target_safe ?></code>&apos;</a></li>
	</ul>
</blockquote>