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
		if(isset($_POST['submit']))
		{
			$sql="INSERT INTO notification(username,role) SELECT username,role FROM login where role='C'";
			
			$result=mysqli_query($conn,$sql);
			/*if (mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
				$username = $row['username'];
				$role = $row['role'];
				$sql="INSERT INTO notification(username,role) VALUES('".$username."','".$role."')";
				$result = mysqli_query($conn,$sql);
				}
			}*/
			$notification = test_input($_POST['not']);
			$sql2="UPDATE notification SET notification='".$notification."' WHERE role ='C' ";
			$result2 = mysqli_query($conn,$sql2);
			if($result2)
			{
				echo "<script>alert('Notification Generated Successfully!!!!');</script>";
				//echo "<script>window.location='http://localhost/COR/CUSTOMER.php'</script>";
			}
			else
			{
				echo "<script>alert('Request Not Generated Succesfull!!!!');</script>";
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
<br/><br/> 

 
<center>
<div class="container">

<div ng-app="myapp" ng-controller="bookController">

<form class="well form-search" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<h4>NOTIFICATION GENERATION</h4>
	<textarea class="input-medium search-query" name="not" placeholder="You can type any kind of notification here which will be received by the registered customers" cols="80" rows="5"></textarea>
	</br>
	</br>
	<input type="submit" class="btn btn-primary" name="submit" value="GENRERATE"/>		
</form>

</div>

</div>

</center>
</body>  
</html>
