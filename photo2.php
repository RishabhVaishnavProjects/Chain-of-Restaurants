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
	
	$sql="SELECT * FROM testt WHERE fname='arpit.jpg'";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0)
	{
		// output data of each row
		while($row = mysqli_fetch_assoc($result))
		{
			$photo = $row["fname"];
		}
	}
}					
?>
<img src="<?php echo $photo ?>"/>
</body>
</html>