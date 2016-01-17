var fetchApp = angular.module('Fetch');

fetchApp.controller('LatestProjects', ['$scope', '$http', function($scope, $http) {
	$http.get('/api/projects.php?latest').success(function(data) {
		$scope.projects = data;

		if (data.length > 0) {
			$('#latest-project-list').removeClass('hide');
		}
	});
}]);