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
			window.location.href='r1.php';
		});
		$("#d2").click(function(){
			window.location.href='r2.php';
		});
		$("#d3").click(function(){
			
			window.location.href='r3.php';
		});
		$("#rb").click(function(){
			
			window.location.href='REGISTERATION.php';
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
			$photo1 = $row2["p1"];
			$photo2 = $row2["p2"];
			$photo3 = $row2["p3"];
			$photo4 = $row2["p4"];
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
        <li><a href="#" style="color:white;font-size:20px">Home</a></li>
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
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
	  <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" >
		<div class="item active" style="height:400px;width:1400px">
			<!--<img src="hd-pics-photos-food-kerala-traditional-desktop-background-wallpaper.jpg" alt="Image" >-->
			<img src="<?php echo $photo1 ?>"/>
			<div class="carousel-caption">
            <h1>Flamenco Restaurants</h>
			<h3>The best restaurants in Bangalore</h3>
			</div>      
		</div>
		<div class="item" style="height:400px;width:1400px">
			<!--<img src="Food-HD-Wallpapers.jpg" alt="Image">-->
			<img src="<?php echo $photo2 ?>"/>
			<div class="carousel-caption">
			<h2>Never Had a Bad Meal!!!!</h2>
			</div>      
		</div>
		<div class="item" style="height:400px;width:1400px">
			<!--<img src="344143-svetik_3840x2400.jpg" alt="Image" >-->
			<img src="<?php echo $photo3 ?>"/>
			<div class="carousel-caption">
			<h2>Laughter is brightest where food is best!!!!!</h2>
			</div>      
		</div>
		<div class="item" style="height:400px;width:1400px">
			<!--<img src="dessert-sweet-table-food-hd-wallpaper.jpg" alt="Image">-->
			<img src="<?php echo $photo4 ?>"/>
			<div class="carousel-caption">
			<h2>Life is Short....eat dessert first!!!!</h2>
			</div>      
		</div>
    </div>
	<!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>-->
	
	

</div>
  
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
