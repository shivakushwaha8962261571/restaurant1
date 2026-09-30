<?php
include("connection.php");

$id = $_GET['id'];

$query = "DELETE FROM orderpage where id='$id' ";
$data = mysqli_query($conn, $query);

if($data)
{
	echo "Order Deleted";

?>
	<meta http-equiv="refresh" content="0;url=http://localhost/restaurant1/order_show.php">

<?php
}
else
{
	echo "Failed to delete";
}
?>