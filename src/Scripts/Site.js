var fetchApp = angular.module('Fetch', []);

fetchApp.controller('LatestProjects', ['$scope', '$http', function($scope, $http) {
	$http.get('/api/projects.php?latest').success(function(data) {
		$scope.projects = data;
	});
}]);

$(document).ready(function(){
	// Enable our side-nav to work
	$("#nav-collapse-button").sideNav();
});