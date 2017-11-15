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
<body>
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
		if(isset($_POST['submit']))
		{
			$choice = test_input($_POST['manager']);
			$subject = test_input($_POST['subject']);
			$message = test_input($_POST['message']);
			if(empty($_POST["manager"]))
			{
				echo "<script>alert('Every Field Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else if(empty($_POST["subject"]))
			{
				echo "<script>alert('Every Field Required!!!!');</script>";
			}
			else if(empty($_POST["message"]))
			{
				echo "<script>alert('Every Field Required!!!!');</script>";
			}
			else
			{
			
			switch($choice)
			{
				case 1:
					$choice1 = 102;
					$sql = "INSERT INTO mail VALUES('".$choice1."','".$subject."','".$message."')";
					$result = mysqli_query($conn,$sql);
					echo "<script>alert('Mail Generated Successfully!!!!');</script>";
				break;
				case 2:
					$choice2 = 103;
					$sql2 = "INSERT INTO mail VALUES('".$choice2."','".$subject."','".$message."')";
					$result2 = mysqli_query($conn,$sql2);
					echo "<script>alert('Mail Generated Successfully!!!!');</script>";
				break;
				case 3:
					$choice3 = 104;
					$sql3 = "INSERT INTO mail VALUES('".$choice3."','".$subject."','".$message."')";
					$result3 = mysqli_query($conn,$sql3);
					echo "<script>alert('Mail Generated Successfully!!!!');</script>";
				break;
				case 4:
					$ch1 = 102;
					$ch2 = 103;
					$ch3 = 104;
					$sql4 = "INSERT INTO mail VALUES('".$ch1."','".$subject."','".$message."')";
					$sql5 = "INSERT INTO mail VALUES('".$ch2."','".$subject."','".$message."')";
					$sql6 = "INSERT INTO mail VALUES('".$ch3."','".$subject."','".$message."')";
					$result4 = mysqli_query($conn,$sql4);
					$result5 = mysqli_query($conn,$sql5);
					$result6 = mysqli_query($conn,$sql6);
					echo "<script>alert('Mail Generated Successfully!!!!');</script>";
				break;
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

<div ng-app="myapp" ng-controller="bookController">

<form class="well form-search" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<h4>MAIL GENERATION</h4>
	<table class="table table-bordered">
		<tr>
			<td>To Manager Of Restaurant:</td>
			<td>
			<select name="manager">
				<option selected="selected">Select Restaurant</option>
				<option value="1">The Chervil Calvin's</option>
				<option value="2">Smally's resto cafe</option>
				<option value="3">Savoury-Sea Shell Restaurant</option>
				<option value="4">ALL MANAGERS</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>Subject:</td><td><input type="text" placeholder="Enter Subject"  style="width:220px" name="subject"/></td>
		</tr>
	</table>
	<textarea class="input-medium search-query" name="message" placeholder="You can type any kind of Mail here which will be received by the registered Manager's" cols="80" rows="5"></textarea>
	</br>
	</br>
	<input type="submit" class="btn btn-primary" name="submit" value="GENRERATE"/>		
</form>

</div>

</div>

</center>
</body>
</html>