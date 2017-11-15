<html>
<head>
<title>COR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.css">
  <script src="jquery-3.1.1.min.js"></script>
  <script src="bootstrap.js"></script>
<style>
#div1
{
	border: 1px solid #73AD21;
	width: 600px;
    height: 250px; 
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
#label2{
	font-family: Geneva,Tahoma,Verdana,sans-serif;
	font-size: 25px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 26.4px;
}
.table1
{
	cellpadding:20;
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
error_reporting(0);
session_start();
$user_id=$_SESSION['username'];
//$u_type=$_SESSION['utype'];
//$b_code=$_SESSION['b_code'];

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
			$password1 = $password2 = "";
			$u_type = "C";
			$password1 = $_POST['password1'];
			$password2 = $_POST['password2'];
			if($password1 == $password2)
			{
			echo "<script>alert('PASSWORD HAS BEEN SET!!!!');</script>";
			$sql="INSERT INTO login VALUES('".$user_id."','".$password2."','".$u_type."')";
			$sql2="INSERT INTO notification(username,role) VALUES('".$user_id."','".$u_type."')";
			$result = mysqli_query($conn,$sql);
			$result2 = mysqli_query($conn,$sql2);
				if($result)
				{
					echo "<script>window.location='http://localhost/COR/HOME_PAGE.php'</script>";
					//header("Location: MAIN_PAGE.php");
				}
			}
			else
			{
				echo "<script>alert('PASSWORD DOEST MATCH!!!!');</script>";
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
        <li><a href="" style="color:white;font-size:20px">About</a></li>
        <li><a href="" style="color:white;font-size:20px">Contact</a></li>
      </ul>
      
    </div>
  </div>
</nav>

</br></br>
<center>
</br>
</br>
</br>
</br>
<div id="div1">
	</br>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table>
		
		<tr>
		<td><label id="label2">Your Id:&nbsp</label></td>
		<td><input type="text"  placeholder="" name="f" value="<?php echo $user_id ?>" class="textbox2"></td>
		</tr>
		</table>
		
		
		</br>
		
		<table style="position:absolute;left:32%;top:40%">
		<tr>
		<td><label id="label2">Enter Password:</label></td>
		<td><input type="password" name="password1" placeholder="Password" class="textbox2"></td>
		</tr>
		</table>
		
		
		</br>
		
		
		<table style="position:absolute;left:29.2%;top:48%">
		<tr>
		<td><label id="label2">Re-Enter Password:</label></td>
		<td><input type="password" name="password2" placeholder="Password" class="textbox2"></td>
		</tr>
		</table>
		</br>
		</br>
		</br>
		</br>
		</br>
		<input class="btn btn-primary" type="submit" value="Submit"/>
		
	</form>
</div>
<center>


<body>
</html>