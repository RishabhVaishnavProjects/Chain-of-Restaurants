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
		$("#logout").click(function(){
			
			window.location.href='LOGOUT.php';
		});
		});
  </script>
  <style>
#t1
{
	width:360px;
}
#t2
{
	width:360px;
}
#t3
{
	width:360px;
}
#div3
{
	border: 4px solid #73AD21;
	width: 500px;
    height: 620px; 
}
  </style>
</head>
<body>
<?php
error_reporting(0);
session_start();
$itemn1 = $_SESSION['itemn1'];
$itemn2 = $_SESSION['itemn2'];
$itemn3 = $_SESSION['itemn3'];
$itemn4 = $_SESSION['itemn4'];
$itemn5 = $_SESSION['itemn5'];

$amt1 = $_SESSION['itema1'];
$amt2 = $_SESSION['itema2'];
$amt3 = $_SESSION['itema3'];
$amt4 = $_SESSION['itema4'];
$amt5 = $_SESSION['itema5'];

$t = $_SESSION['am'];
$v = $_SESSION['vt'];
$st = $_SESSION['srt'];
$p = $_SESSION['py'];
$oid = $_SESSION['oid'];


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
	$sql2="UPDATE orderplaced SET name='NULL' WHERE name ='id'";
	$result2 = mysqli_query($conn,$sql2);
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(isset($_POST['submit']))
		{
			if (empty($_POST["da"]))
			{
				echo "<script>alert('Delivery Area  Required!!!!');</script>";
				//$pc_error = "Required";
			}
			else if(empty($_POST["ca"]))
			{
				echo "<script>alert('Complete Address Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else if(empty($_POST["name"]))
			{
				echo "<script>alert('Name  Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else if(empty($_POST["cn"]))
			{
				echo "<script>alert('Contacts  Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else if(empty($_POST["ui"]))
			{
				echo "<script>alert('userid  Required!!!!');</script>";
				//$bc_error = "Required";
			}
			else if(!preg_match("/^[a-zA-Z ]*$/",($_POST["name"])))
			{
				echo "<script>alert('Enter only Text for firstname!!!!');</script>";
			}
			else if(!preg_match("/^[0-9]*$/",($_POST["cn"])))
			{
				echo "<script>alert('Enter only Digits for Contacts!!!!');</script>";
			}
			else if(!preg_match("/^[0-9]*$/",($_POST["ui"])))
			{
				echo "<script>alert('Enter Valid User Id!!!!');</script>";
			}
			else
			{
			$rid = 1;
			$user_id = test_input($_POST['ui']);
			$name = test_input($_POST['name']);
			$cn = test_input($_POST['cn']);
			$deliveryArea = test_input($_POST['da']);
			$completeAdd = test_input($_POST['ca']);
			$deliInst = test_input($_POST['di']);
			$nickN = test_input($_POST['r1']);
			$status = "PENDING";
				
				
			$sql="UPDATE orderplaced SET rid='".$rid."',userid='".$user_id."',name='".$name."',cn='".$cn."',da='".$deliveryArea."',ca='".$completeAdd."',di='".$deliInst."',nn='".$nickN."',i1='".$itemn1."',i2='".$itemn2."',i3='".$itemn3."',i4='".$itemn4."',i5='".$itemn5."',a1='".$amt1."',a2='".$amt2."',a3='".$amt3."',a4='".$amt4."',a5='".$amt5."',t='".$t."',vt='".$v."',st='".$st."',p='".$p."',status='".$status."' WHERE orderid = '$oid'";
				
			//$sql2="UPDATE orderplaced SET name='NULL' WHERE name ='id'";
			//$result2 = mysqli_query($conn,$sql2);
				
			$result = mysqli_query($conn,$sql);
			if($result)
			{
				echo "<script>alert('YOUR ORDER ID IS   '+'$oid'+'  ');</script>";
				echo "<script>alert('Order Placed Successfully!!!!');</script>";
				echo "<script>window.location='http://localhost/COR/CUSTOMER.php'</script>";
			}
			else
			{
				echo "<script>alert('Order Placing Not Succesfull!!!!');</script>";
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




<center>
</br>
<div class="container" id="div3">
  <h4>Enter Order Details</h4>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group">
      <label>User Id:</label>
      <input type="text" class="form-control" id="t1"  placeholder="Enter User Id" name="ui">
    </div>  
  
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" id="t1"  placeholder="Enter Name" name="name">
    </div>
	
   <div class="form-group">
      <label>Contact No:</label>
      <input type="text" class="form-control" id="t1"  placeholder="Enter Contact Number" name="cn">
    </div>
  
    <div class="form-group">
      <label>Delivery Area:</label>
      <input type="text" class="form-control" id="t1"  placeholder="Enter Delivery Area" name="da">
    </div>

    <div class="form-group">
      <label>Complete Address:</label>
      <input type="text" class="form-control" id="t2" placeholder="Enter Complete Address" name="ca">
    </div>

	<div class="form-group">
      <label>Delivery Instructions:</label>
      <input type="text" class="form-control" id="t3" placeholder="Enter Delivery Instruction" name="di">
    </div>

	<div class="form-group">
		<label>Nickname</label></br>
      		<input type="radio" name="r1" value="Home">Home&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="radio" name="r1" value="Work">Work&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="radio" name="r1" value="Other">Other&nbsp
	</div>
    <input type="submit" name="submit" class="btn btn-default" value="Submit">
  </form>
</div>
</center>
</br>
</br>
</br>
</body>
</html>
