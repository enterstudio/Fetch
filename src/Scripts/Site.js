var fetchApp = angular.module('Fetch', []);

$(document).ready(function(){
	// Enable our side-nav to work
	//$('#nav-collapse-button').sideNav();
	var elem = $(".nav-extend");
	if (elem.length)
	{
		$("nav").addClass("z-depth-0").css("z-index", "1");
	}
});