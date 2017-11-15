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
		if(isset($_POST['update1']))
		{
			if(empty($_POST["p1"]))
			{
				echo "<script>alert('Photo Field Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else
			{
			$photo = test_input($_POST['p1']);
			$sql="UPDATE photos SET p1='".$photo."' WHERE id = 1";
			$result = mysqli_query($conn,$sql);
			if($result)
			{
				echo "<script>alert('Photo Updated Successfully!!!!');</script>";
				//echo "<script>window.location='http://localhost/COR/CUSTOMER.php'</script>";
			}
			else
			{
				echo "<script>alert('Photo Updation Failed!!!!');</script>";
			}
			}
		}
		else if(isset($_POST['update2']))
		{
			if(empty($_POST["p2"]))
			{
				echo "<script>alert('Photo Field Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else
			{
			$photo2 = test_input($_POST['p2']);
			$sql2="UPDATE photos SET p2='".$photo2."' WHERE id = 1";
			$result2 = mysqli_query($conn,$sql2);
			if($result2)
			{
				echo "<script>alert('Photo Updated Successfully!!!!');</script>";
				//echo "<script>window.location='http://localhost/COR/CUSTOMER.php'</script>";
			}
			else
			{
				echo "<script>alert('Photo Updation Failed!!!!');</script>";
			}
			}
		}
		else if(isset($_POST['update3']))
		{
			if(empty($_POST["p3"]))
			{
				echo "<script>alert('Photo Field Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else
			{
			$photo3 = test_input($_POST['p3']);
			$sql3="UPDATE photos SET p3='".$photo3."' WHERE id = 1";
			$result3 = mysqli_query($conn,$sql3);
			if($result3)
			{
				echo "<script>alert('Photo Updated Successfully!!!!');</script>";
				//echo "<script>window.location='http://localhost/COR/CUSTOMER.php'</script>";
			}
			else
			{
				echo "<script>alert('Photo Updation Failed!!!!');</script>";
			}
			}
		}
		else if(isset($_POST['update4']))
		{
			if(empty($_POST["p4"]))
			{
				echo "<script>alert('Photo Field Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else
			{
			$photo4 = test_input($_POST['p4']);
			$sql4="UPDATE photos SET p4='".$photo4."' WHERE id = 1";
			$result4 = mysqli_query($conn,$sql4);
			if($result4)
			{
				echo "<script>alert('Photo Updated Successfully!!!!');</script>";
				//echo "<script>window.location='http://localhost/COR/CUSTOMER.php'</script>";
			}
			else
			{
				echo "<script>alert('Photo Updation Failed!!!!');</script>";
			}
			}
		}
		else if(isset($_POST['update5']))
		{
			if(empty($_POST["p5"]))
			{
				echo "<script>alert('Photo Field Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else
			{
			$photo5 = test_input($_POST['p5']);
			$sql5="UPDATE photos SET p5='".$photo5."' WHERE id = 1";
			$result5 = mysqli_query($conn,$sql5);
			if($result5)
			{
				echo "<script>alert('Photo Updated Successfully!!!!');</script>";
				//echo "<script>window.location='http://localhost/COR/CUSTOMER.php'</script>";
			}
			else
			{
				echo "<script>alert('Photo Updation Failed!!!!');</script>";
			}
			}
			
		}
		else if(isset($_POST['update6']))
		{
			if(empty($_POST["p6"]))
			{
				echo "<script>alert('Photo Field Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else
			{
			$photo6 = test_input($_POST['p6']);
			$sql6="UPDATE photos SET p6='".$photo6."' WHERE id = 1";
			$result6 = mysqli_query($conn,$sql6);
			if($result6)
			{
				echo "<script>alert('Photo Updated Successfully!!!!');</script>";
				//echo "<script>window.location='http://localhost/COR/CUSTOMER.php'</script>";
			}
			else
			{
				echo "<script>alert('Photo Updation Failed!!!!');</script>";
			}
			}
		}
		else if(isset($_POST['update7']))
		{
			if(empty($_POST["p7"]))
			{
				echo "<script>alert('Photo Field Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else
			{
			$photo7 = test_input($_POST['p7']);
			$sql7="UPDATE photos SET p7='".$photo7."' WHERE id = 1";
			$result7 = mysqli_query($conn,$sql7);
			if($result7)
			{
				echo "<script>alert('Photo Updated Successfully!!!!');</script>";
				//echo "<script>window.location='http://localhost/COR/CUSTOMER.php'</script>";
			}
			else
			{
				echo "<script>alert('Photo Updation Failed!!!!');</script>";
			}
			}
		}
		else
		{
			
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
<div class="container">   
	<h4>IMAGES UPDATION</h4>
    <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="well form-search">
<h5>HOME PAGE IMAGES</h5>
<h6>Carousel IMAGES</h6>
<table class="table table-bordered">
<tr>
	<td>Photo 1</td><td><input type="text" name="p1"/></td><td><input type="submit" value="Update" name="update1"/></td>
</tr>
<tr>
	<td>Photo 2</td><td><input type="text" name="p2"/></td><td><input type="submit" value="Update" name="update2"/></td>
</tr>
<tr>
	<td>Photo 3</td><td><input type="text" name="p3"/></td><td><input type="submit" value="Update" name="update3"/></td>
</tr>
<tr>
	<td>Photo 4</td><td><input type="text" name="p4"/></td><td><input type="submit" value="Update" name="update4"/></td>
</tr>
</table>

<h5>RESTAURANTS PAGE IMAGES</h5>
<table class="table table-bordered">
<tr>
	<td>The Chervil Calvin's</td><td><input type="text" name="p5"/></td><td><input type="submit" value="Update" name="update5"/></td>
</tr>
<tr>
	<td>Smally's resto cafe</td><td><input type="text" name="p6"/></td><td><input type="submit" value="Update" name="update6"/></td>
</tr>
<tr>
	<td>Savoury-Sea Shell Restaurant</td><td><input type="text" name="p7"/></td><td><input type="submit" value="Update" name="update7"/></td>
</tr>
</table>
</form>
</div>
</div>
</center>




</body>
</html>