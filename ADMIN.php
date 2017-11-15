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
	  	    
      $scope.displayData = function(){  
           $http.get("eselect.php")  
           .success(function(data){  
                $scope.names = data;  
           });  
      }  
	  
	  $scope.displayData2 = function(){  
           $http.get("eselect2.php")  
           .success(function(data){  
                $scope.names2 = data;  
           });  
      }  
	  
	  $scope.displayData3 = function(){  
           $http.get("eselect3.php")  
           .success(function(data){  
                $scope.names3 = data;  
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
			
			window.location.href='LOGOUT5.php';
		});
		});
  </script>
</head>
<?php
 error_reporting(0);
	session_start();
	$user_id=$_SESSION['username5'];
	if(!isset($_SESSION['name5']))
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
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(isset($_POST['submit1']))
		{

			$empid1 = test_input($_POST['empid1']);
			$rstid = test_input($_POST['rest1']);
			if(empty($_POST["empid1"]))
			{
				echo "<script>alert('Employee Id Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else if(!preg_match("/^[0-9]*$/",($_POST["empid1"])))
			{
				echo "<script>alert('Enter only Digits!!!!');</script>";
			}
			else
			{
			
			$sql="SELECT * FROM employee WHERE emp_id='$empid1'";								
			$result=mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					$trans = "FALSE";
					$empid = $row["emp_id"];
					$fname = $row["fname"];
					$lname = $row["lname"];
					$email = $row["email"];
					$cno = $row["cno"];
					$address = $row["address"];
					//$restname = $row["restname"];
					switch($rstid)
					{
						case 2:
							
							$sql2 = "DELETE FROM employee WHERE emp_id='$empid1'";
						
							$sql3 = "INSERT INTO employee(rest_id,emp_id,fname,lname,email,cno,address) VALUES('".$rstid."','".$empid."','".$fname."','".$lname."','".$email."','".$cno."','".$address."')";
							$result2 = mysqli_query($conn,$sql2);
							
							$result3 = mysqli_query($conn,$sql3);
							if($result3)
							{
								echo "<script>alert('Transfer Done Successfully!!!!');</script>";
							}
							else
							{
								echo "<script>alert('Transfer  Unsuccessfully!!!!');</script>";
							}
						break;
						case 3:
							$sql4 = "DELETE FROM employee WHERE emp_id='$empid1'";
						
							$sql5 = "INSERT INTO employee(rest_id,emp_id,fname,lname,email,cno,address) VALUES('".$rstid."','".$empid."','".$fname."','".$lname."','".$email."','".$cno."','".$address."')";
							$result4 = mysqli_query($conn,$sql4);
							
							$result5 = mysqli_query($conn,$sql5);
							if($result5)
							{
								echo "<script>alert('Transfer Done Successfully!!!!');</script>";
							}
							else
							{
								echo "<script>alert('Transfer  Unsuccessfully!!!!');</script>";
							}	
						break;
					}
					
				}
			}
			
			}
		}	
		else if(isset($_POST['submit2']))
		{
			$empid1 = test_input($_POST['empid2']);
			$rstid = test_input($_POST['rest2']);
			
			if(empty($_POST["empid2"]))
			{
				echo "<script>alert('Employee Id Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else if(!preg_match("/^[0-9]*$/",($_POST["empid2"])))
			{
				echo "<script>alert('Enter only Digits!!!!');</script>";
			}
			else
			{
			
			$sql="SELECT * FROM employee WHERE emp_id='$empid1'";								
			$result=mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					$trans = "FALSE";
					$empid = $row["emp_id"];
					$fname = $row["fname"];
					$lname = $row["lname"];
					$email = $row["email"];
					$cno = $row["cno"];
					$address = $row["address"];
					//$restname = $row["restname"];
					switch($rstid)
					{
						case 1:
							
							$sql2 = "DELETE FROM employee WHERE emp_id='$empid1'";
						
							$sql3 = "INSERT INTO employee(rest_id,emp_id,fname,lname,email,cno,address) VALUES('".$rstid."','".$empid."','".$fname."','".$lname."','".$email."','".$cno."','".$address."')";
							$result2 = mysqli_query($conn,$sql2);
							
							$result3 = mysqli_query($conn,$sql3);
							if($result3)
							{
								echo "<script>alert('Transfer Done Successfully!!!!');</script>";
							}
							else
							{
								echo "<script>alert('Transfer  Unsuccessfully!!!!');</script>";
							}
						break;
						case 3:
							$sql4 = "DELETE FROM employee WHERE emp_id='$empid1'";
						
							$sql5 = "INSERT INTO employee(rest_id,emp_id,fname,lname,email,cno,address) VALUES('".$rstid."','".$empid."','".$fname."','".$lname."','".$email."','".$cno."','".$address."')";
							$result4 = mysqli_query($conn,$sql4);
							
							$result5 = mysqli_query($conn,$sql5);
							if($result5)
							{
								echo "<script>alert('Transfer Done Successfully!!!!');</script>";
							}
							else
							{
								echo "<script>alert('Transfer  Unsuccessfully!!!!');</script>";
							}	
						break;
					}
					
				}
			}

			}
		}
		else
		{
			$empid1 = test_input($_POST['empid3']);
			$rstid = test_input($_POST['rest3']);
			
			if(empty($_POST["empid3"]))
			{
				echo "<script>alert('Employee Id Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else if(!preg_match("/^[0-9]*$/",($_POST["empid3"])))
			{
				echo "<script>alert('Enter only Digits!!!!');</script>";
			}
			else
			{
			
			$sql="SELECT * FROM employee WHERE emp_id='$empid1'";								
			$result=mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					$trans = "FALSE";
					$empid = $row["emp_id"];
					$fname = $row["fname"];
					$lname = $row["lname"];
					$email = $row["email"];
					$cno = $row["cno"];
					$address = $row["address"];
					//$restname = $row["restname"];
					switch($rstid)
					{
						case 1:
							
							$sql2 = "DELETE FROM employee WHERE emp_id='$empid1'";
						
							$sql3 = "INSERT INTO employee(rest_id,emp_id,fname,lname,email,cno,address) VALUES('".$rstid."','".$empid."','".$fname."','".$lname."','".$email."','".$cno."','".$address."')";
							$result2 = mysqli_query($conn,$sql2);
							
							$result3 = mysqli_query($conn,$sql3);
							if($result3)
							{
								echo "<script>alert('Transfer Done Successfully!!!!');</script>";
							}
							else
							{
								echo "<script>alert('Transfer  Unsuccessfully!!!!');</script>";
							}
						break;
						case 2:
							$sql4 = "DELETE FROM employee WHERE emp_id='$empid1'";
						
							$sql5 = "INSERT INTO employee(rest_id,emp_id,fname,lname,email,cno,address) VALUES('".$rstid."','".$empid."','".$fname."','".$lname."','".$email."','".$cno."','".$address."')";
							$result4 = mysqli_query($conn,$sql4);
							
							$result5 = mysqli_query($conn,$sql5);
							if($result5)
							{
								echo "<script>alert('Transfer Done Successfully!!!!');</script>";
							}
							else
							{
								echo "<script>alert('Transfer  Unsuccessfully!!!!');</script>";
							}	
						break;
					}
					
				}
			}

			}
		}
	}
}

function test_input($data)
{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
}


?>
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
        <li><a href="ADMIN.php" style="color:white;font-size:20px">Transfer</a></li>
        <li><a href="MAIL.php" style="color:white;font-size:20px">Mail</a></li>
		<li><a href="REQUEST_RECIEVED.php" style="color:white;font-size:20px">Request Received</a></li>
		<li><a href="CHANGE_PHOTO.php" style="color:white;font-size:20px">Change Images</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="LOGOUT.php" style="color:white;font-size:20px"  data-toggle="modal" data-target="#myModal" id="logout">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<center>
<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="container">   
	<h4>The Chervil Calvin's</h4>
    <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
        <table class="table table-bordered">  
            <tr>  
				<th>EMPLOYEE ID</th>
                <th>FIRST NAME</th>  
                <th>LAST NAME</th> 
				<th>EMAIL</th>
				<th>CONTACT No.</th>
				<th>ADDRESS</th>
            </tr>  
            <tr ng-repeat="x in names"> 
				<td>{{x.emp_id}}</td>
                <td>{{x.fname}}</td>  
				<td>{{x.lname}}</td>
                <td>{{x.email}}</td>
			    <td>{{x.cno}}</td>  
                <td>{{x.address}}</td> 
			    <!--<td>{{x.restname}}</td>--> 
                <!--<td>{{x.transfer}}</td>--> 
            </tr>  
			<tr>
			<td>Employee Id</td><td><input type="text" placeholder="Enter Employee Id" name="empid1"/></td>
			<td>Transfer To</td>
			<td>
				<select name="rest1">
				<option selected="selected">Select Restaurant</option>
				<option value="2">Smally's resto cafe</option>
				<option value="3">Savoury-Sea Shell Restaurant</option>
				</select>
			</td>
			<td align="center" colspan="3"><input type="submit" class="btn btn-primary" name="submit1" value="TRANSFER"/></td>
			</tr>
        </table> 
	<div>
	</br></br></br>
	<div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData2()">  
		<h4>Smally's resto cafe</h4>
        <table class="table table-bordered">  
            <tr>  
				<th>EMPLOYEE ID</th>
                <th>FIRST NAME</th>  
                <th>LAST NAME</th> 
				<th>EMAIL</th>
				<th>CONTACT No.</th>
				<th>ADDRESS</th>
            </tr>  
            <tr ng-repeat="x in names2"> 
				<td>{{x.emp_id}}</td>
                <td>{{x.fname}}</td>  
				<td>{{x.lname}}</td>
                <td>{{x.email}}</td>
			    <td>{{x.cno}}</td>  
                <td>{{x.address}}</td>  
                <!--<td>{{x.transfer}}</td>--> 
            </tr>  
			<tr>
			<td>Employee Id</td><td><input type="text" placeholder="Enter Employee Id" name="empid2"/></td>
			<td>Transfer To</td>
			<td>
				<select name="rest2">
				<option selected="selected">Select Restaurant</option>
				<option value="1">The Chervil Calvin's</option>
				<option value="3">Savoury-Sea Shell Restaurant</option>
				</select>
			</td>
			<td align="center" colspan="3"><input type="submit" class="btn btn-primary" name="submit2" value="TRANSFER"/></td>
			</tr>
        </table> 
	<div>
	</br></br></br>
	<div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData3()"> 
		<h4>Savoury-Sea Shell Restaurant</h4>
        <table class="table table-bordered">  
            <tr>  
				<th>EMPLOYEE ID</th>
                <th>FIRST NAME</th>  
                <th>LAST NAME</th> 
				<th>EMAIL</th>
				<th>CONTACT No.</th>
				<th>ADDRESS</th>
            </tr>  
            <tr ng-repeat="x in names3"> 
				<td>{{x.emp_id}}</td>
                <td>{{x.fname}}</td>  
				<td>{{x.lname}}</td>
                <td>{{x.email}}</td>
			    <td>{{x.cno}}</td>  
                <td>{{x.address}}</td> 
                <!--<td>{{x.transfer}}</td>--> 
            </tr>  
			<tr>
			<td>Employee Id</td><td><input type="text" placeholder="Enter Employee Id" name="empid3"/></td>
			<td>Transfer To</td>
			<td>
				<select name="rest3">
				<option selected="selected">Select Restaurant</option>
				<option value="1">The Chervil Calvin's</option>
				<option value="2">Smally's resto cafe</option>
				</select>
			</td>
			<td align="center" colspan="3"><input type="submit" class="btn btn-primary" name="submit3" value="TRANSFER"/></td>
			</tr>
        </table> 
	<div>
</div>
</form>
</center>




</body>
</html>