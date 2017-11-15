<html>
<head>
	<title>COR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.css">
  <script src="jquery-3.1.1.min.js"></script>
  <script src="bootstrap.js"></script>
<style>
#div3
{
	border: 4px solid #73AD21;
	width: 500px;
    height: 430px; 
}
textarea2 {
    width: 100%;
    height: 100px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}
select2{
	width: 140%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 6px 10px 6px 20px;
}
select2:focus {
	background-color: lightblue;
}

.textbox2{
    width: 140%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 6px 10px 6px 20px;
}
.textbox2:focus {
    background-color: lightblue;
}
label2{
	font-family: Geneva,Tahoma,Verdana,sans-serif;
	font-size: 20px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 26.4px;
}

input#gobutton{
cursor:pointer; /*forces the cursor to change to a hand when the button is hovered*/
padding:5px 25px; /*add some padding to the inside of the button*/
background:#35b128; /*the colour of the button*/
border:1px solid #33842a; /*required or the default border for the browser will appear*/
/*give the button curved corners, alter the size as required*/
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
/*give the button a drop shadow*/
-webkit-box-shadow: 0 0 4px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 4px rgba(0,0,0, .75);
box-shadow: 0 0 4px rgba(0,0,0, .75);
/*style the text*/
color:#f3f3f3;
font-size:1.1em;
}
/***NOW STYLE THE BUTTON'S HOVER AND FOCUS STATES***/
input#gobutton:hover, input#gobutton:focus{
background-color :#399630; /*make the background a little darker*/
/*reduce the drop shadow size to give a pushed button effect*/
-webkit-box-shadow: 0 0 1px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 1px rgba(0,0,0, .75);
box-shadow: 0 0 1px rgba(0,0,0, .75);
}
</style>
</head>
<body>
<?php
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
	//echo "<script>alert('YOYOYOY!!!!');</script>";
	$fname = $lname = $address = $emai_id = $phno = "";
	//$username = $usertype = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
			echo "<script>alert('YOYOYOY!!!!');</script>";
			if(isset($_POST['submit']))
			{
				if (empty($_POST["fn"]))
				{
				echo "<script>alert('First Name is  Required!!!!');</script>";
				//$pc_error = "Required";
				}
				else if(empty($_POST["ln"]))
				{
				echo "<script>alert('Last Name is  Required!!!!');</script>";
				//$bc_error = "Required";
				}
				else if(empty($_POST["add"]))
				{
				echo "<script>alert('Address is Required!!!!');</script>";
				//$bc_error = "Required";
				}
				else if(empty($_POST["el"]))
				{
				echo "<script>alert('Employee ID is  Required!!!!');</script>";
				//$bc_error = "Required";
				}
				else if(empty($_POST["pn"]))
				{
				echo "<script>alert('Branch Code is Required!!!!');</script>";
				//$bc_error = "Required";
				}
				else if(!preg_match("/^[a-zA-Z ]*$/",($_POST["fn"])))
				{
				echo "<script>alert('Enter only Text for First Name!!!!');</script>";
				}
				else if(!preg_match("/^[a-zA-Z ]*$/",($_POST["ln"])))
				{
				echo "<script>alert('Enter only Text for Last Name!!!!');</script>";
				}
				else if(!preg_match("/^[0-9]*$/",($_POST["pn"])))
				{
				echo "<script>alert('Enter only Digits for Emplyee Id!!!!');</script>";
				}
				else if(!filter_var(($_POST["el"]),FILTER_VALIDATE_EMAIL))
				{
				echo "<script>alert('Type valid email format!!!!');</script>";
				}
				else
				{
					$fname = test_input($_POST['fn']);
					$lname = test_input($_POST['ln']);
					$address = test_input($_POST['add']);
					$emai_id = test_input($_POST['el']);
					$phno = test_input($_POST['pn']);
					
					//$user_type = test_input($_POST['eid']);
					
		
					$sql="INSERT INTO registeration(f_name,l_name,email,address,p_no) VALUES
					('".$fname."','".$lname."','".$emai_id."','".$address."','".$phno."')";
					$result = mysqli_query($conn,$sql);
					echo "<script>alert('DATA COLLECTED SUCCESSFULLY!!!!');</script>";
					if($result)
					{
						$sql2 = "SELECT * from registeration where p_no = '$phno'";
						$result2 = mysqli_query($conn,$sql2);
						if($result2)
						{
							while($row2 = $result2->fetch_assoc())
							{
								$username = $row2['user_id'];
								//$usertype = $row2['utype'];
								//$b_code = $row2['bcode'];
						
								//echo "<script>alert('$username');</script>";
								//echo "<script>alert('$usertype');</script>";
						
								session_start();
								$_SESSION['username'] = $username;
								//$_SESSION['utype'] = $usertype;
								//$_SESSION['b_code'] = $b_code;
								echo "<script>window.location='http://localhost/COR/PASSWORD.php'</script>";
								//header("Location: PASSWORD.php");
							}
						}
					}
					else
					{
					echo "<script>alert('ERROR IN COLLECTING DATA!!!!');</script>";
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
        <li><a href="HOME_PAGE.php" style="color:white;font-size:20px">Home</a></li>
        <li><a href="" style="color:white;font-size:20px">About</a></li>
        <li><a href="" style="color:white;font-size:20px">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

</br></br>
<div class="container">
  <center>
  <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="form-group" id="div3">
	</br>
	<input type="text" class="form-control" name="fn" placeholder="Enter First Name" style="width:300px"/>
    </br>
	<input type="text" class="form-control"  name="ln" placeholder="Enter Last Name" style="width:300px"/>
	</br>
	<input type="text" class="form-control"  name="el" placeholder="Enter Email" style="width:300px"/>
	</br>
	<textarea rows="6" cols="39" id="comment" name="add" placeholder="Enter Address"></textarea>
	</br>
	</br>
	<input type="text" class="form-control" name="pn" placeholder="Enter Phone Number" style="width:300px"/>
	</br>
	<input type="submit" class="btn btn-primary" style="height:35px;width:120px;font-size:15px" value="REGISTER" name="submit"/>
	</div>
  </form>
  </center>
</div>
<footer></footer>

<body>
</html>