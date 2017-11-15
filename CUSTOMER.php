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
	$sql="SELECT * FROM notification where username='$user_id'";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		while($row = $result->fetch_assoc()) 
		{
			$notification = $row['notification'];
			echo '<script>
			$(document).ready(function()
			{
				var node = document.getElementById("mask123");
				node.style.visibility = "visible";
			});
			</script>';
			$sql2="DELETE FROM notification WHERE username='$user_id'";	
			$result2=mysqli_query($conn,$sql2);
		}
	}
	else
	{
		echo 'RECORD NOT FOUND';
	}
	
}		
?>
<script>
 $(document).ready(function(){
	
		$("#mask123").click(function(){
			alert('<?php echo $notification;?>');
			//alert("HELLOOOOO");
			var node = document.getElementById("mask123");
			node.style.visibility = "hidden";
		});
		});
 </script>
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
</br></br></br></br></br>
 <center> 
<div class="container text-center">    
  <br>
  <div class="row">
		<div class="col-sm-4" id="d1">
			<img src="japanese_food-wallpaper-2560x1600.jpg" class="img-responsive" style="width:100%" alt="Image">
			<div class="well">
			<p>The Chervil Calvin's</p></br>
			<p style="color:grey;">KORMANGALA</p>
			</div>
		</div>
		<div class="col-sm-4" id="d2">
			<img src="coffee_house_hdr-wallpaper-3840x2400.jpg" class="img-responsive" style="width:100%" alt="Image">
			<div class="well">
			<p>Smally's resto cafe</p></br>
			<p style="color:grey;">JAYANAGAR</p>
			</div>
		</div>
		<div class="col-sm-4" id="d3">
			<img src="food_vegetables_baked_goods_herbs_87405_3840x2400.jpg" class="img-responsive" style="width:100%" alt="Image">
			<div class="well">
			<p>Savoury-Sea Shell Restaurant</p></br>
			<p style="color:grey;">BRIGADE ROAD</p>
			</div>
		</div>
  </div>
</div><br>
</center>
</br>
<footer class="container-fluid text-center">
  <p>By continuing past this page, you agree to our Terms of Service, Cookie Policy, Privacy Policy and Content Policies. All trademarks are properties of their respective owners. © 2008-2017 - Flamenco™ Media Pvt Ltd. All rights reserved</p>
</footer>

</body>
</html>