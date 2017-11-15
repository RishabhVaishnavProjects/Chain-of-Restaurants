<?php
//database settings
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
//$connect = mysqli_connect("hostname", "username", "password", "dbname");
$sql="SELECT * FROM orderplaced";
$result=mysqli_query($conn,$sql);
//$result = mysqli_query($conn,"select * from orderplaced");

$data = array();

while ($row = mysqli_fetch_array($result)) {
  $data[] = $row;
}
    print json_encode($data);
	
}
?>