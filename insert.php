<?php 
$data = json_decode(file_get_contents("php://input"));
$rid = 1;
$tr = "FALSE";
$fn = mysql_real_escape_string($data->firstname);
$ln = mysql_real_escape_string($data->lastname);
$id = mysql_real_escape_string($data->empid);
$email = mysql_real_escape_string($data->email);
$con = mysql_real_escape_string($data->contact);
$add = mysql_real_escape_string($data->address);
$rn = mysql_real_escape_string($data->restname);
//$blanguage = mysql_real_escape_string($data->blanguage);
mysql_connect("localhost", "root", ""); 
mysql_select_db("cor");
mysql_query("INSERT INTO employee VALUES('".$rid."','".$id."','".$fn."','".$ln."','".$email."','".$con."','".$add."','".$tr."','".$rn."')");
?>