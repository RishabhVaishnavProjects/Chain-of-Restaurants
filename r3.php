<!DOCTYPE html>
<html lang="en">
<head>
  <title>COR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.css">
  <script src="jquery-3.1.1.min.js"></script>
  <script src="bootstrap.js"></script>
  <script>
  $(document).ready(function(){
	
		$("#b1").click(function(){
			alert("YOU HAVE TO LOIGN FIRST!!!");
		});
		$("#b2").click(function(){
			alert("YOU HAVE TO LOIGN FIRST!!!");
		});
	});
  </script>
  <style>
  .textbox:focus {
    background-color: lightblue;
	}
  .textbox{
    width: 70%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
	}
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
  </style>
</head>
<body>
<?php
error_reporting(0);
session_start();
$name=$pass="";
if($_SESSION['name']=='C')
{
    header("Location: CUSTOMER.php");
}
else if($_SESSION['role']=='M')
{
	header("Location: C_ACCOUNTANT.php");
}
else
{
	
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
	$sql2="SELECT * FROM photos WHERE id=1";
	$result2=mysqli_query($conn,$sql2);
	if (mysqli_num_rows($result2) > 0)
	{
		// output data of each row
		while($row2 = mysqli_fetch_assoc($result2))
		{
			$photo1 = $row2["p7"];
		}
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		echo "<script>alert('WRONG USER NAME OR PASSWORD');</script>";
		$user=$_POST['userid'];//textbox ke naam
		$pass=$_POST['password'];//
		$sql="SELECT * from login where username='$user' and password='$pass'";
		$result=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($result);
		if($count==1)
		{
			while($row = $result->fetch_assoc())
			{
				$role=$row['role'];
				$id=$row['username'];
				//$b_code=$row['b_id'];
				//$ind=$row['index3'];
			}
			if($role=='C')
			{
				$_SESSION['name']="C";
				$_SESSION['username'] = $user;
				header("Location: CUSTOMER.php");
			}
			else if($id == 102)
			{
				$_SESSION['name2']="M";	
				$_SESSION['username2'] = $user;
				header("Location: R1_MANAGER.php");
			}
			else if($id == 103)
			{
				$_SESSION['name3']="M";	
				$_SESSION['username3'] = $user;
				header("Location: R2_MANAGER.php");
			}
			else if($id == 104)
			{
				$_SESSION['name4']="M";	
				$_SESSION['username4'] = $user;
				header("Location: R3_MANAGER.php");
			}
			else if($id == 105)
			{
				$_SESSION['name5']="A";	
				$_SESSION['username5'] = $user;
				header("Location: ADMIN.php");
			}
			else
			{
				 echo "<script>alert('CAN NOT IDENTIFY YOU');</script>";
			}
				
		}
		else
		{
			echo "<script>alert('WRONG USER NAME OR PASSWORD');</script>";
		}
	}
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
        <li><a href="HOME_PAGE.php" style="color:white;font-size:20px">Home</a></li>
        <li><a href="#" style="color:white;font-size:20px">About</a></li>
        <li><a href="#" style="color:white;font-size:20px">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" style="color:white;font-size:20px"  data-toggle="modal" data-target="#myModal">Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox" >
		<div class="item active" style="height:400px;">
			<!--<img src="arpit.jpg" alt="Image" width="1500px"> -->
				<img src="<?php echo $photo1 ?>" width="1500px"/>
		</div>
    </div>
</div> 
</br> 
<center>
<div class="col-sm-12" id="d1">
		<div class="well">
		<h2 align="left">Savoury-Sea Shell Restaurant</h2>
		<hr style="border: 1px solid black;">
		<h4 align="left">Brigade Road * Pub,Microbrewery</h4></br>
		<input type="button" class="btn btn-primary" style="float:left;height:45px;width:160px;font-size:20px" value="Book a Table" id="b1"/>
		<input type="button" class="btn btn-success" style="float:right;height:45px;width:195px;font-size:20px" value="Order Food Online" id="b2"/>
		</br>
		</br>
		</div>
</div>
</center>
</br> 
<div class="container-fluid bg-3 text-center">    
    <div class="col-sm-4" id="d1">
		<div class="well">
		<h4 align="left">Phone Number</h4>
		<h4 align="left" style="color:red;">080 45343457</h4>
		<p align="left" style="color:grey;">Table reservation required </p>
		<h4 align="left">Cuisines</h4>
		<p align="left" style="color:red;">American,Continental,North Indian</p>
		<p align="left" style="color:red;">Mediterranean</p>
		<h4 align="left">Cost</h4>
		<p align="left" style="color:grey;">Average</p>
		<p align="left" style="color:black;">Rs.2000 for two people(approx.)</p>
		<p align="left" style="color:black;">with alcohol</p>
		<p align="left" style="color:grey;">VAT and Service Charges Extra</p>
		<p align="left" style="color:grey;">Cash And Card Accepted</p>
		</div>
	</div>
      
    <div class="col-sm-4" id="d1">
		<div class="well">
		<h4 align="left">Opening Hours:</h4>
		<p align="left">9 AM To 12 Midnight</p>
		<p align="left" style="color:grey;">Happy Hours: ALL MONDAY'S 11:00 AM TO</p>
		<p align="left" style="color:grey;">1:00 AM, SUN,TUE, WED & THU(11:00 AM TO 7:00 PM</p>
		<h4 align="left">Address:</h4>
		<p align="left">LR Arcade,4121,Brigade Road, Bangalore</p>   
		</div>
	</div>
    <div class="col-sm-4" id="d1">
		<div class="well">
		<h4 align="left">Highlights:</h4>
		<p align="left"> * Full Bar Available</p>
		<p align="left"> * Live Music</P>
		<p align="left"> * Valet Parking Available</p>
		<p align="left"> * Smoking Area</p>
		<p align="left"> * Buffet</p>
		<p align="left"> * Nightlife</p>
		<p align="left"> * Rooftop</p>
		<p align="left"> * Outdoor Seating</p>
		<p align="left"> * Wifi</p>
		<p align="left"> * Live Sports Screening</p>
		<h4 align="left">Known For</h4>
		<p align="left">Their unique ambiance with brewed beer</p>
		</div>
	</div>
    
</div><br>
<br><br>

<footer class="container-fluid text-center">
  <p>By continuing past this page, you agree to our Terms of Service, Cookie Policy, Privacy Policy and Content Policies. All trademarks are properties of their respective owners. © 2008-2017 - Flamenco™ Media Pvt Ltd. All rights reserved</p>
</footer>

<!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<center>
			<div class="modal-body">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<input type="text" name="userid" placeholder="User Id" class="textbox"></br></br>
				<input type="password" name="password" placeholder="Password" class="textbox"></br></br>
				<input type="submit" class="btn btn-primary" style="height:45px;width:160px;font-size:20px" value="Login" id="lb" name="submit"/>
				<input type="button" class="btn btn-default" style="height:45px;width:160px;font-size:20px" value="Register" id="rb" name="register"/>
				</form>
			</div>
			<div class="modal-footer">
			</div>
			</center>
		</div> 
  </div>



</body>
</html>
