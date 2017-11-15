<!DOCTYPE html>
<html>
<head>
  <title>COR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.css">
  <script src="jquery-3.1.1.min.js"></script>
  <script src="bootstrap.js"></script>
  <script src="angular.min.js"></script>
  <script>  
 var app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope, $http){  
      $scope.insertData = function(){  
           $http.post(  
                'insert.php',  
                {'firstname':$scope.firstname, 'lastname':$scope.lastname, 'empid':$scope.eid, 'email':$scope.email, 'contact':$scope.contact, 'address':$scope.address, 'restname':$scope.restname}  
           ).success(function(data){  
                alert(data);  
                $scope.firstname = null;  
                $scope.lastname = null;  
                $scope.displayData();  
           });  
      }  
	  
	  
	  $scope.url = 'esearch.php';
	  $scope.search = function() {  
		$http.post($scope.url, { "data" : $scope.keywords}).
		success(function(data, status) {
			$scope.status = status;
			$scope.data = data;
			$scope.result = data; // Show result from server in our <pre></pre> element
		})
		.
		error(function(data, status) {
			$scope.data = data || "Request failed";
			$scope.status = status;			
		});
	};
	
	
	
	  $scope.delete = function() {  
		$http.post('emaildelete.php', { "data" : $scope.keywords2}).
		success(function(data, status) {
			$scope.status = status;
			$scope.data = data;
			$scope.result = data; // Show result from server in our <pre></pre> element
		})
		.
		error(function(data, status) {
			$scope.data = data || "Request failed";
			$scope.status = status;			
		});
	};
	
	

      $scope.displayData = function(){  
           $http.get("email3.php")  
           .success(function(data){  
                $scope.names = data;  
           });  
      }  
 });  
 </script>  
 <script>
    $(document).ready(function(){
	
		$("#d1").click(function(){
			window.location.href='lr1.php';
		});
		$("#d2").click(function(){
			window.location.href='lr2.php';
		});
		$("#d3").click(function(){
			
			window.location.href='lr3.php';
		});
		$("#logout").click(function(){
			
			window.location.href='LOGOUT4.php';
		});
		});
  </script>
 </head>
 </head>
 <body>
 <?php
 error_reporting(0);
	session_start();
	$user_id=$_SESSION['username4'];
	if(!isset($_SESSION['name4']))
	{
		echo "<script>alert('PLEASE LOGIN FIRST');</script>";
        //echo "window.location='MAIN_PAGE.php'";
		header("Location: HOME_PAGE.php");
	}
 ?>
 <nav class="navbar navbar-inverse" style="background-color:#E84478">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div>
     <ul class="nav navbar-nav" style="font-color:white">
        <li><a href="R3_MANAGER.php" style="color:white;font-size:20px">Orders Received</a></li>
        <li><a href="TABLE_BOOK3.php" style="color:white;font-size:20px">Table Booking</a></li>
        <li><a href="MENU3.php" style="color:white;font-size:20px">Change Menu</a></li>
		<li><a href="NOTIFICATION3.php" style="color:white;font-size:20px">Notification</a></li>
		<li><a href="EMPLOYEE3.php" style="color:white;font-size:20px">Employees</a></li>
		<li><a href="MANAGER_REQ3.php" style="color:white;font-size:20px">Requests</a></li>
		<li><a href="MMAIL3.php" style="color:white;font-size:20px">Mail</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="LOGOUT.php" style="color:white;font-size:20px"  data-toggle="modal" data-target="#myModal" id="logout">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>



<center>
<div class="container">   
	<h4>MAIL RECEIVED BY ADMIN</h4>
    <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
        <table class="table table-bordered">  
            <tr>  
				<th>SUBJECT</th>
                <th>CONTENT</th>  
            </tr>  
                <tr ng-repeat="x in names"> 
				<td>{{x.subject}}</td>
                <td>{{x.message}}</td>  
            </tr>  
        </table>  
		<form class="well form-search">
		<h4>DELETE THE RECORDs</h4>
		<input type="text" ng-model="keywords2" class="input-medium search-query" placeholder="Enter User Id" pattern="[0-9]*" title="ONLY DIGITS ARE ALLOWED">
		<button type="submit" class="btn" ng-click="delete()">DELETE</button>		
        </form>
	</div>
</div>
</center>




</body>
</html>