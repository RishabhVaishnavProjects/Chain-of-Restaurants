<html>
<head>
<script src="jquery-3.1.1.min.js"></script>
  <script src="bootstrap.js"></script>
  <script src="angular.min.js"></script>
</head>
<body>
<div ng-app="myapp" ng-controller="empcontroller">
        <form>
            Employe No. <input type="text" ng-model="emp_no" /><br/>
            First Name. <input type="text" ng-model="first_name" /><br/>
            Last Name.  <input type="text" ng-model="last_name" /><br/>
            <!--Department. <input type="text" ng-model="dept_name" /><br/>-->
             <button ng-click="postData()">Submit</button><br>
        </form> 
    </div>
</body>
<script>
app.controller('empcontroller',function ($scope, $http) {
/*
* This method will be called on click event of button.
*/
$scope.postData = function () {

    var request = $http({
        method: "post",
        url: window.location.href + "insert2.php",
        data: {
            emp_no: $scope.emp_no,
            first_name: $scope.first_name,
            last_name: $scope.last_name,
            //dept_name: $scope.dept_name,
        },
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    });

 }
}); 
</script>
</html>	