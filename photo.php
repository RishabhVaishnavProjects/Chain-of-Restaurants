<html>
<head>
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
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(isset($_POST['submit']))
		{
		$p = test_input($_POST['p']);
		//$subject = test_input($_POST['subject']);
		//$message = test_input($_POST['message']);
		$sql="INSERT INTO testt(fname) values('".$p."')";
		$result=mysqli_query($conn,$sql);
			if($result)
			{
				echo "<script>alert('Request Generated Successfully!!!!');</script>";
			}
			else
			{
			
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
<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="text" name="p" ></br>
<input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>