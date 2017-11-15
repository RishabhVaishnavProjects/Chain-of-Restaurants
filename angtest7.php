<!DOCTYPE html>
<html ng-app>
<head>
<title>Search form with AngualrJS</title>
	<link rel="stylesheet" href="bootstrap.css">
  <script src="jquery-3.1.1.min.js"></script>
  <script src="bootstrap.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.24/angular.min.js"></script>
</head>

<body>

	<div ng-controller="SearchCtrl">
	<form class="well form-search">
		<label>Search:</label>
		<input type="text" ng-model="keywords" class="input-medium search-query" placeholder="Keywords...">
		<button type="submit" class="btn" ng-click="search()">Search</button>
		<p class="help-block">Try for example: "php" or "angularjs" or "asdfg"</p>		
    </form>
<!--<pre ng-model="result">
{{result}}
</pre>-->
<table>
<tr ng-repeat="x in names">  
                               <td>{{x.userid}}</td>  
                               <td>{{x.name}}</td>  
                          </tr> 
   </div>
</body>
<script>
function SearchCtrl($scope, $http) {
	$scope.url = 'search2.php'; // The url of our search
		
	// The function that will be executed on button click (ng-click="search()")
	$scope.search = function() {
		
		// Create the http post request
		// the data holds the keywords
		// The request is a JSON request.
		$http.post($scope.url, { "data" : $scope.keywords}).
		success(function(data, status) {
			$scope.status = status;
			$scope.data = data;
			$scope.names = data; // Show result from server in our <pre></pre> element
		})
		.
		error(function(data, status) {
			$scope.data = data || "Request failed";
			$scope.status = status;			
		});
	};
}
</script>
</html> 