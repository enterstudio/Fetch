<?php
	$target = substr(strtok($_SERVER['REQUEST_URI'],'?'), 1);
	$target_safe = htmlentities($target);
	$target_search = urlencode($target);
?>
<p class="flow-text">
	The page you were looking for, &apos;<code><?= $target_safe ?></code>&apos;, does not support the HTTP method
	you were trying to send. (which was &apos;<?= htmlentities($_SERVER['REQUEST_METHOD']) ?>&apos;, in case you wanted to know)<br/>
	The page told us: <?= htmlentities($FETCH_ERROR_EXCEPTION->message) ?>
</p>