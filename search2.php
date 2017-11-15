<?php
$connect = mysqli_connect("localhost","root","","cor");  
$data = file_get_contents("php://input");
$objData = json_decode($data);
$values = array();
$query = 'SELECT * FROM orderplaced WHERE orderid="'. $objData->data .'"';
$result = mysqli_query($connect,$query);
if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
 }  
?>