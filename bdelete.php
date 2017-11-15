<?php
$connect = mysqli_connect("localhost","root","","cor");  
$data = file_get_contents("php://input");
$objData = json_decode($data);
$values = array();
$query = 'DELETE FROM booktable WHERE bid="'. $objData->data .'"';
$result = mysqli_query($connect,$query);
if($result)  
 {   
      echo 'Record Deleted Succesfully!!!!!';  
 } 
else
{
		echo 'Deletion Not Successfull';
} 
?>
