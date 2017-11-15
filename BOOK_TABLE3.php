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
			window.location.href='r1.html';
		});
		$("#d2").click(function(){
			window.location.href='r2.html';
		});
		$("#d3").click(function(){
			
			window.location.href='r3.html';
		});
		$("#logout").click(function(){
			
			window.location.href='LOGOUT.php';
		});
		
		$('#durationExample').timepicker({
				'minTime': '2:00pm',
				'maxTime': '11:30pm',
				'showDuration': true
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
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(isset($_POST['submit']))
		{
			if (empty($_POST["date"]))
			{
				echo "<script>alert('Booking Details are  Required!!!!');</script>";
				//$pc_error = "Required";
			}
			else if(empty($_POST["time"]))
			{
				echo "<script>alert('Booking Details are Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else if(empty($_POST["guests"]))
			{
				echo "<script>alert('Booking Details are  Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else if(empty($_POST["firstname"]))
			{
				echo "<script>alert('firstname  Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else if(empty($_POST["lastname"]))
			{
				echo "<script>alert('lastname  Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else if(empty($_POST["email"]))
			{
				echo "<script>alert('email  Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else if(empty($_POST["cn"]))
			{
				echo "<script>alert('Contacts  Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else if(empty($_POST["userid"]))
			{
				echo "<script>alert('userid  Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else if(!preg_match("/^[a-zA-Z ]*$/",($_POST["firstname"])))
			{
				echo "<script>alert('Enter only Text for firstname!!!!');</script>";
			}
			else if(!preg_match("/^[a-zA-Z ]*$/",($_POST["lastname"])))
			{
				echo "<script>alert('Enter only Text for firstname!!!!');</script>";
			}
			else if(!filter_var(($_POST["email"]),FILTER_VALIDATE_EMAIL))
			{
				echo "<script>alert('Type valid email format!!!!');</script>";
			}
			else if(!preg_match("/^[0-9]*$/",($_POST["cn"])))
			{
				echo "<script>alert('Enter only Digits for Contacts!!!!');</script>";
			}
			else if(!preg_match("/^[0-9]*$/",($_POST["userid"])))
			{
				echo "<script>alert('Enter Valid User Id!!!!');</script>";
			}
			else
			{
			$rid = 3;
			$date = test_input($_POST['date']);
			$time = test_input($_POST['time']);
			$guests = test_input($_POST['guests']);
			$firstname = test_input($_POST['firstname']);
			$lastname = test_input($_POST['lastname']);
			$email = test_input($_POST['email']);
			$cn = test_input($_POST['cn']);
			$user_id = test_input($_POST['userid']);
			$occasion = test_input($_POST['occasion']);
			$fv = test_input($_POST['fv']);
			$addreq = test_input($_POST['addreq']);
			
			$name = 'id';
			$status = "PENDING";
				
			$sql3="INSERT INTO booktable(userid,fn) VALUES('".$user_id."','".$name."')";
			$result3 = mysqli_query($conn,$sql3);
				//if($result3)
				//{
				//echo "<script>alert('Request Generated Successfully!!!!');</script>";
				//}
				
				
			$sql2="SELECT * FROM booktable WHERE fn = '$name'";
			$result2=mysqli_query($conn,$sql2);
			if (mysqli_num_rows($result2) > 0)
				{
					// output data of each row
					while($row2 = mysqli_fetch_assoc($result2))
					{
					//$id = 1;
					$bid = $row2["bid"];
					}
				}
				
			$sql4="UPDATE booktable SET d='".$date."',t='".$time."',g='".$guests."',fn='".$firstname."',ln='".$lastname."',email='".$email."',
			cn='".$cn."',o='".$occasion."',fv='".$fv."',addreq='".$addreq."',rid='".$rid."',status='".$status."' WHERE bid ='$bid'";
			$result4 = mysqli_query($conn,$sql4);
			
			
			
			
			
			//$sql = "UPDATE booktable "
			//userid,d,t,g,fn,ln,email,cn,o,fv,addreq,rid,bid
			
			//$sql="INSERT INTO booktable VALUES('".$user_id."','".$date."','".$time."','".$guests."',
			//	'".$firstname."','".$lastname."','".$email."','".$cn."','".$occasion."','".$fv."',
			//	'".$addreq."','".$rid."')";
				
			$result4 = mysqli_query($conn,$sql4);
			if($result4)
			{
				echo "<script>alert('YOUR ORDER ID IS   '+'$bid'+'  ');</script>";
				echo "<script>alert('Request For Booking Table Generated Successfully!!!!');</script>";
				echo "<script>window.location='http://localhost/COR/CUSTOMER.php'</script>";
			}
			else
			{
				echo "<script>alert('Request Not Generated Succesfull!!!!');</script>";
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
        <li><a href="CUSTOMER.php" style="color:white;font-size:20px">Home</a></li>
        <li><a href="DBDETAILS.php" style="color:white;font-size:20px">Delivery Info</a></li>
		<li><a href="BDETAILS.php" style="color:white;font-size:20px">Booking Info</a></li>
        <li><a href="#" style="color:white;font-size:20px">Notifications</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="LOGOUT.php" style="color:white;font-size:20px"  data-toggle="modal" data-target="#myModal" id="logout">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid bg-3 text-center"> 
	<div class="col-sm-8" style="position:absolute;top:15%;left:16%" >
		<div class="well">
		<img src="japanese_food-wallpaper-2560x1600.jpg" class="img-responsive" style="width:30%" alt="Image" style="float:left">
		<h3 style="position:absolute;top:1%;left:36%">Savoury-Sea Shell Restaurant</h3>
		<p align="left" style="color:grey;position:absolute;top:30%;left:36%">Brigade Road * Pub,Microbrewery</p>
		<p align="left" style="color:red;position:absolute;top:45%;left:36%">American,Continental,North Indian

Mediterranean * Cost Rs.2000 for two people(approx.)

with alcohol</p>
		
		</div>
	</div>
</div>


<div class="container-fluid bg-3 text-center" > 
	<div class="col-sm-8" style="position:absolute;top:48%;left:16%" >
		<div class="well" style="border:4px solid #73AD21">
		<h4 align="left" style="color:red;position:absolute;top:10%;left:5%">Note</h4>
		<p align="left" style="color:red;position:absolute;top:35%;left:3%">Table Reservation​ & t​​​​​he section/floor assignment will be done as per​ ​availability.Please call 080-45530000 - Savoury-Sea Shell Restaurant, </p><p align="left" style="color:red;position:absolute;top:55%;left:3%">to confirm your reservations for Sizzling Street (Buffet) & Star Lounge (Roof Top)</p>
		</br>
		</br>
		</br>
		</br>
		</br>
		</div>
	</div>
</div>



<form  class="form-inline" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="container-fluid bg-3 text-center"> 
	<div class="col-sm-8" style="position:absolute;top:74%;left:16%" >
		<div class="well">
		</br></br></br></br></br></br>
			<!--<form class="form-inline">-->
			
				<div class="form-group">
				<h4 style="float:left;position:absolute;top:1%;left:10%">1.Please select your booking details:</h4>
				<label for="email" style="float:left;position:absolute;top:20%;left:10%">Select a Date:</label></br>
				<input type="date" name="date" placeholder="Enter Date" style="float:left;position:absolute;top:40%;left:10%" class="form-control"/>
				</div>
				
				<div class="form-group">
				<label for="pwd" style="float:left;position:absolute;top:20%;left:45%">Select a Time:</label></br>
				<select name="time" style="float:left;height:32px;width:150px;position:absolute;top:40%;left:45%">
				<option selected="selected"></option>
				<option value="12:00pm">12:00 pm</option>
				<option value="12:45pm">12:45 pm</option>
				<option value="01:00pm">01:00 pm</option>
				<option value="01:45pm">01:45 pm</option>
				<option value="02:00pm">02:00 pm</option>
				<option value="02:45pm">02:45 pm</option>
				<option value="03:00pm">03:00 pm</option>
				<option value="03:45pm">03:45 pm</option>
				<option value="04:00pm">04:00 pm</option>
				<option value="04:45pm">04:45 pm</option>
				<option value="05:00pm">05:00 pm</option>
				<option value="05:45pm">05:45 pm</option>
				<option value="06:00pm">06:00 pm</option>
				<option value="06:45pm">06:45 pm</option>
				<option value="07:00pm">07:00 pm</option>
				<option value="07:45pm">07:45 pm</option>
				<option value="08:00pm">08:00 pm</option>
				<option value="08:45pm">08:45 pm</option>
				<option value="09:00pm">09:00 pm</option>
				<option value="09:45pm">09:45 pm</option>
				<option value="10:00pm">10:00 pm</option>
				<option value="10:45pm">10:45 pm</option>
				<option value="11:00pm">11:00 pm</option>
				<option value="11:45pm">11:45 pm</option>
				</select>
				</div>
				
				<div class="form-group">
				<label for="pwd" style="float:left;position:absolute;top:20%;left:75%">Number of Guests:</label></br>
				<select name="guests" style="float:left;height:32px;width:150px;position:absolute;top:40%;left:75%">
				<option selected="selected"></option>
				<option value="2">2 guests</option>
				<option value="3">3 guests</option>
				<option value="4">4 guests</option>
				<option value="5">5 guests</option>
				<option value="6">6 guests</option>
				<option value="7">7 guests</option>
				<option value="8">8 guests</option>
				<option value="9">9 guests</option>
				<option value="10">10 guests</option>
				<option value="10+">10 + guests</option>
				</select>
				</div>
			<!--</form>-->
		</div>
	</div>
</div>
<!--<button type="submit" class="btn btn-default">Submit</button>-->


<div class="container-fluid bg-3 text-center"> 
	<div class="col-sm-8" style="position:absolute;top:105%;left:16%;" >
		<div class="well" style="height:400px">
		
			<!--<form class="form-inline" >-->
			
				<div class="form-group">
				<h4 style="float:left;position:absolute;top:1%;left:10%">2. Enter guest details:</h4>
				<label for="email" style="float:left;position:absolute;top:15%;left:10%">Enter First Name:</label></br>
				<input type="text" class="form-control" name="firstname" placeholder="e.g Ross" style="float:left;position:absolute;top:25%;left:10%">
				</div>
				
				<div class="form-group">
				<label for="pwd" style="float:left;position:absolute;top:15%;left:45%">Enter Last Name:</label></br>
				<input type="text" class="form-control" name="lastname"  placeholder="e.g Geller" style="float:left;position:absolute;top:25%;left:45%">
				</div>
				
				<div class="form-group">
				<label for="pwd" style="float:left;position:absolute;top:38%;left:10%">Email:</label></br>
				<input type="text" class="form-control" name="email"  placeholder="e.g abc@flamenco.com" style="float:left;position:absolute;top:48%;left:10%">
				</div>
				
				<div class="form-group">
				<label for="pwd" style="float:left;position:absolute;top:38%;left:45%">Contact No:</label></br>
				<input type="text" class="form-control" name="cn"  placeholder="e.g abc@flamenco.com" style="float:left;position:absolute;top:48%;left:45%">
				</div>
				
				<div class="form-group">
				<label for="pwd" style="float:left;position:absolute;top:38%;left:75%">User Id:</label></br>
				<input type="text" class="form-control" name="userid"  placeholder="Enter User Id" style="float:left;position:absolute;top:48%;left:75%">
				</div>
				
				<div class="form-group">
				<label style="float:left;position:absolute;top:63%;left:10%"><input type="radio" name="occasion" value="Birthday">&nbspBirthday</label>
				<label style="float:left;position:absolute;top:63%;left:30%"><input type="radio" name="occasion" value="Anniversary">&nbspAnniversary</label>
				<label style="float:left;position:absolute;top:63%;left:50%"><input type="checkbox" name="fv" value="Fist Visit">&nbspIs This your First Visit?</label>
				</div>
				
				<div class="form-group">
				<label for="pwd" style="float:left;position:absolute;top:72%;left:10%">Special Requests:</label></br>
				<textarea style="float:left;position:absolute;top:78%;left:10%" rows="2" cols="60" name="addreq" placeholder="Let us know if there are any additional requests that we should convey to the restaurant on your behalf"/></textarea>
				<input type="submit"  class="btn btn-primary" style="height:45px;width:175px;font-size:20px;position:absolute;top:78%;left:70%" name="submit" value="Confirm Booking"/>
				</div>
			<!--</form>-->
		</div>
	</div>
</div>
</form>
</body>
</html>