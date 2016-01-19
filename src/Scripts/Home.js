var fetchApp = angular.module('Fetch');

fetchApp.controller('LatestProjects', ['$scope', '$http', function($scope, $http) {
	$scope.projects = [];

	$http.get('/api/projects.php?latest').success(function(data) {
		$scope.projects = data;

		console.log(data);

		if (data.length > 0) {
			$('#latest-project-list').removeClass('hide');
		}
	});
}]);