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
			window.location.href='BOOK_TABLE2.php';
		});
		$("#b2").click(function(){
			window.location.href='ORDER2.php';
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
        <li><a href="#" style="color:white;font-size:20px">Notifications</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="LOGOUT.php" style="color:white;font-size:20px">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox" >
		<div class="item active" style="height:400px;width:1400px">
			<img src="344143-svetik_3840x2400.jpg" alt="Image" >     
		</div>
    </div>
</div> 
</br> 
<center>
<div class="col-sm-12" id="d1">
		<div class="well">
		<h2 align="left">Smally's resto cafe</h2>
		<hr style="border: 1px solid black;">
		<h4 align="left">Jayanagar 5th Block * Cafe</h4></br>
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
		<h4 align="left" style="color:red;">080 45343459</h4>
		<h4 align="left" style="color:red;">+91 9945602562</h4>
		<h4 align="left">Cuisines</h4>
		<p align="left" style="color:red;">Cafe,American</p>
		<h4 align="left">Cost</h4>
		<p align="left" style="color:grey;">Average</p>
		<p align="left" style="color:black;">Rs.600 for two people(approx.)</p>
		<p align="left" style="color:grey;">VAT and Service Charges Extra</p>
		<p align="left" style="color:grey;">Cash And Card Accepted</p>
		</div>
	</div>
      
    <div class="col-sm-4" id="d1">
		<div class="well">
		<h4 align="left">Opening Hours:</h4>
		<p align="left">8 AM to 3 PM, 5:30 PM to 8:30 PM</p>
		<h4 align="left">Address:</h4>
		<p align="left">4,8th Main Road,Jayanagar 5th Block, Bangalore</p>   
		</div>
	</div>
    <div class="col-sm-4" id="d1">
		<div class="well">
		<h4 align="left">Highlights:</h4>
		<p align="left"> * Breakfast</p>
		<p align="left"> * Wheelchair Accessible</P>
		<p align="left"> * Outdoor Seating</p>
		<h4 align="left">Known For</h4>
		<p align="left">Extensive breakfast Menu </p>
		</div>
	</div>
    
</div><br>
<br><br>

<footer class="container-fluid text-center">
  <p>By continuing past this page, you agree to our Terms of Service, Cookie Policy, Privacy Policy and Content Policies. All trademarks are properties of their respective owners. © 2008-2017 - Flamenco™ Media Pvt Ltd. All rights reserved</p>
</footer>

</body>
</html>
