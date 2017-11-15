<?php

 $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $emp_no = $request->emp_no;
    $first_name = $request->first_name;
    $last_name = $request->last_name;
    //$dept_name = $request->dept_name;


$servername = "localhost";
$username = "root";
$password = ""; //Your User Password
$dbname = "cor"; //Your Database Name


// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO notification
VALUES ('".$emp_no."','".$first_name."','".$last_name."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>