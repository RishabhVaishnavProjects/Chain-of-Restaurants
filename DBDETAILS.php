<!DOCTYPE html>
<html lang="en">
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
                "status.php",  
                {'orderid':$scope.oid, 'status':$scope.choice}  
           ).success(function(data){  
                alert(data);  
                $scope.firstname = null;  
                $scope.lastname = null;  
                $scope.displayData();  
           });  
      }  
	  
	  
	  $scope.url = 'odetails.php';
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
		$http.post('delete.php', { "data" : $scope.keywords2}).
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
           $http.get("select.php")  
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
			
			window.location.href='LOGOUT.php';
		});
		});
  </script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	
	.badge1 {
   position:relative;
}
.badge1[data-badge]:after {
   content:attr(data-badge);
   position:absolute;
   top:-5px;
   right:-42px;
   font-size:20px;
   background:orange;
   color:white;
   width:35px;height:35px;
   text-align:center;
   line-height:35px;
   border-radius:50%;
   box-shadow:0 0 1px #333;
}
	
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
 
</head>
<body>
<?php
error_reporting(0);
session_start();
$user_id=$_SESSION['username'];
if(!isset($_SESSION['name']))
{
	echo "<script>alert('PLEASE LOGIN FIRST');</script>";
    //echo "window.location='MAIN_PAGE.php'";
	header("Location: HOME_PAGE.php");
}

$server="localhost";
$username="root";
$password="";
$dbname="cor";
$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn)
{
		die('could not connect'.mysql_error());
}
else
{
	
	
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
        <li><a href="CUSTOMER.php" style="color:white;font-size:20px">Home</a></li>
        <li><a href="DBDETAILS.php" style="color:white;font-size:20px">Delivery Info</a></li>
		<li><a href="BDETAILS.php" style="color:white;font-size:20px">Booking Info</a></li>
        <li><a href="#" style="color:white;font-size:20px">Notifications<span class="badge1" style="visibility:hidden;" data-badge="!" id="mask123"  ></span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="LOGOUT.php" style="color:white;font-size:20px"  data-toggle="modal" data-target="#myModal" id="logout">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
</br></br>





<center>
<div class="container">   
    <div ng-app="myapp" ng-controller="usercontroller">  
        <form class="well form-search">
		<h4>ORDER DETAILS</h4>
		<input type="text" ng-model="keywords" class="input-medium search-query" placeholder="Enter Order Id" pattern="[0-9]*" title="ONLY DIGITS ARE ALLOWED">
		<button type="submit" class="btn" ng-click="search()">Search</button>		
        </form>
		<table class="table table-bordered">
			<tr ng-repeat="x in result">  
				<th>ORDER ID</th>
                <th>ITEM 1</th>  
                <th>ITEM 2</th> 
				<th>ITEM 3</th>
				<th>ITEM 4</th>
				<th>ITEM 5</th>
				<th>AMOUNT</th>
				<th>ORDER STATUS</th>
            </tr>  
            <tr ng-repeat="x in result"> 
				<td>{{x.orderid}}</td>
			    <td>{{x.i1}}</td>  
                <td>{{x.i2}}</td> 
			    <td>{{x.i3}}</td>  
                <td>{{x.i4}}</td> 
			    <td>{{x.i5}}</td> 
				<td>{{x.p}}</td>
				<td>{{x.status}}</td>
            </tr>  
		</table>
    </div>  
</div>  
</center>
</br>
</body>
</html>
