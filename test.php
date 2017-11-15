<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
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
	  
	  
	  $scope.url = 'search2.php';
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
 </head>
 <body>
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
        <li><a href="CUSTOMER.php" style="color:white;font-size:20px">Orders Received</a></li>
        <li><a href="#" style="color:white;font-size:20px">Table Booking</a></li>
        <li><a href="#" style="color:white;font-size:20px">Change Menu</a></li>
		<li><a href="#" style="color:white;font-size:20px">Notification</a></li>
		<li><a href="#" style="color:white;font-size:20px">Employees</a></li>
		<li><a href="#" style="color:white;font-size:20px">Requests</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="LOGOUT.php" style="color:white;font-size:20px"  data-toggle="modal" data-target="#myModal" id="logout">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

 
<br/><br/>  
<center>
<div class="container">   
	<h4>CUSTOMER DETAILS</h4>
    <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
        <table class="table table-bordered">  
            <tr>  
				<th>ORDER ID</th>
                <th>USER ID</th>  
                <th>CUSTOMER NAME</th> 
				<th>CONTANT NO.</th>
				<th>DELIVERY AREA</th>
				<th>COMPELETE ADDRESS</th>
				<th>DELIVERY INSTURCTION'S</th>
				<th>NICK-NAME</th>
            </tr>  
                <tr ng-repeat="x in names"> 
				<td>{{x.orderid}}</td>
                <td>{{x.userid}}</td>  
                <td>{{x.name}}</td>
			    <td>{{x.cn}}</td>  
                <td>{{x.da}}</td> 
			    <td>{{x.ca}}</td>  
                <td>{{x.di}}</td> 
			    <td>{{x.nn}}</td> 
                </tr>  
        </table>  
		
		
		<form class="well form-search">
		<h4>ORDER DETAILS</h4>
		<input type="text" ng-model="keywords" class="input-medium search-query" placeholder="Enter Order Id">
		<button type="submit" class="btn" ng-click="search()">Search</button>		
        </form>
		<table class="table table-bordered">
			<tr ng-repeat="x in result"> 
				<th>ITEMS</th><th>AMOUNT</th>
				<tr ng-repeat="x in result">
                <td>{{x.i1}}</td><td>{{x.a1}}</td>
				</tr>
				<tr ng-repeat="x in result">
				<td>{{x.i2}}</td><td>{{x.a2}}</td>
				</tr>
				<tr ng-repeat="x in result">
				<td>{{x.i3}}</td><td>{{x.a3}}</td>
				</tr>
				<tr ng-repeat="x in result">
				<td>{{x.i4}}</td><td>{{x.a4}}</td>
				</tr>
				<tr ng-repeat="x in result">
				<td>{{x.i5}}</td><td>{{x.a5}}</td>
				</tr> 
		</table>
		<table class="table table-bordered">
			<tr ng-repeat="x in result">
				<th>TOTAL</th><th>VAT</th><th>SERVICE TAX</th><th>PAYMENT</th>
			</tr>
			<tr ng-repeat="x in result">
				<td>{{x.t}}</td><td>{{x.vt}}</td><td>{{x.st}}</td><td>{{x.p}}</td>
			</tr>
		</table>
		<form class="well form-search">
		<h4>DELETE THE RECORD</h4>
		<input type="text" ng-model="keywords2" class="input-medium search-query" placeholder="Enter Order Id">
		<button type="submit" class="btn" ng-click="delete()">DELETE</button>		
        </form>
		</br>
		
		<form class="well form-search">
		<h4>ADD A RECORD</h4>
		<table class="table table-bordered">
		<tr>
		<td>Enter Employee ID</td><td><input type="text" ng-model="eid" placeholder="Enter Employee Id"/></td>
		<td>Enter First Name</td><td><input type="text" ng-model="firstname" class="input-medium search-query" placeholder="Enter first name"></td>
		<td>Enter Last Name</td><td><input type="text" ng-model="lastname" class="input-medium search-query" placeholder="Enter last name"></td>
		<td>Enter Email</td><td><input type="text" ng-model="email" class="input-medium search-query" placeholder="Enter Email"></td>
		</tr>
		<tr>
		<td>Enter Contact No.</td><td><input type="text" ng-model="contact" class="input-medium search-query" placeholder="Enter Email"></td>
		<td>Enter Address.</td><td><textarea rows="4" cols="25" ng-model="address"  placeholder="Enter Address"></textarea></td>
		<td>Enter Restaurant Name</td><td><input type="text" ng-model="restname" class="input-medium search-query" placeholder="Enter Email"></td>
		<td><button type="submit" class="btn" ng-click="insertData()">Insert</button></td>
		</tr>
		</table>
        </form>
    </div>  
</div>  
</center>
</body>  
</html>
