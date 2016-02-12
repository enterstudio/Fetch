<?php
	$FETCH_PAGE_TITLE = 'Home'; // Store this as a variable so we can refer to it multiple times

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
		<main>
			<div class="container">
				<section class="row" id="welcome-message">
					<div class="col s12">
						<h3>Welcome to Fetch!</h3>
						<p class="flow-text">The ModShare-inspired project sharing site for Scratch 2.0 mods</p>
					</div>
				</section>
				<section class="row">
					<div class="col s12 hide" id="latest-project-list" ng-controller="LatestProjects">
						<h4>Latest Projects</h4>
						<div class="row project-list">
							<div class="col s12 m6 l3 project" ng-repeat="project in projects">
								<div class="card">
									<div class="card-image">
										<img ng-src="{{project.image}}?cache={{project.id}}">
									</div>
									<div class="card-content">
										<span class="card-title truncate"><a ng-href="<?= URL('Project')?>?id={{project.id}}" ng-bind-template="{{project.name}}">Unknown Project</a></span>
										<span class="by-line">By <a ng-href="<?= URL('User')?>?id={{project.creator.id}}" ng-bind-template="{{project.creator.name}}">Unknown User</a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</main>
		<?php require_once(__DIR__ . '/Shared/Partials/Footer.php'); ?>
		<?php require_once(__DIR__ . '/Shared/Partials/Scripts.php'); ?>
		<?= render_file('Scripts/Home.js'); ?>
	</body>
</html>