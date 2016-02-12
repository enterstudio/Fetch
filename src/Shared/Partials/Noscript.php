<?php if (!isset($_GET["noscript"])) { ?>
	<noscript>
		<div class="lean-overlay" style="z-index: 1002; display: block; opacity: 0.5;"></div>
		<div class="modal" style="z-index: 1003; display: block; opacity: 1; transform: scaleX(1); top: 10%;">
			<div class="modal-content">
				<h4>JavaScript disabled!</h4>
				<p>For (most) of this site to work, JavaScript is required. You'll have to enable it to see the site properly. Sorry!</p>
			</div>
			<div class="modal-footer">
				<a href="?noscript=1" class="modal-action modal-close waves-effect waves-red btn-flat">Ignore</a>
			</div>
	    </div>
	</noscript>
<?php } ?> 