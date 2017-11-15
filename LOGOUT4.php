<?php
session_start();
//echo "<script>alert('PLEASE LOGIN FIRST');</script>";
if(isset($_SESSION['name4']))
{
    session_destroy();
	header("Location: HOME_PAGE.php");
}
?>