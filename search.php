<?php
// The request is a JSON request.
// We must read the input.
// $_POST or $_GET will not work!
$connect = mysqli_connect("localhost","root","","cor");  
$data = file_get_contents("php://input");

$objData = json_decode($data);

// perform query or whatever you wish, sample:

/*
$query = 'SELECT * FROM
orderplaced
WHERE
userid="'. $objData->data .'"';
*/

// Static array for this demo
$values = array('php', 'web', 'angularjs', 'js');

// Check if the keywords are in our array
if(in_array($objData->data, $values)) {
	echo 'I have found what you\'re looking for!';
}
else {
	echo 'Sorry, no match!';
}
?>
<?php  
 //select.php  
 $connect = mysqli_connect("localhost","root","","cor");  
 $output = array();  
 $query = "SELECT * FROM orderplaced ";  
 $result = mysqli_query($connect, $query);  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
 }  
 ?>  