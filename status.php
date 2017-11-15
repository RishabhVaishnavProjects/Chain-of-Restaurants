<?php 
$data = json_decode(file_get_contents("php://input"));
//$rid = 1;
//$tr = "FALSE";
$orderid = mysql_real_escape_string($data->orderid);
$status = mysql_real_escape_string($data->status);
//$id = mysql_real_escape_string($data->empid);
//$email = mysql_real_escape_string($data->email);
//$con = mysql_real_escape_string($data->contact);
//$add = mysql_real_escape_string($data->address);
//$rn = mysql_real_escape_string($data->restname);
//$blanguage = mysql_real_escape_string($data->blanguage);
mysql_connect("localhost", "root", ""); 
mysql_select_db("cor");
mysql_query("UPDATE orderplaced SET status = '".$status."' WHERE orderid = '".$orderid."'");
?>