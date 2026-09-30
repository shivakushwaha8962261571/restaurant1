<?php
error_reporting(0);



$conn = mysqli_connect("localhost","root","","restaurant1");

if($conn)
{
	// echo "connection ok";
}
else
{
	echo die("failed ".mysqli_connect_error());
}
?>