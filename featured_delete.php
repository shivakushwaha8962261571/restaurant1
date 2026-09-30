<?php
     include("connection.php");

     $id = $_GET['id'];
    
    $query1   = "SELECT * FROM featured where id = '$id' " ;
    $data1    = mysqli_query($conn, $query1);
    $result   = mysqli_fetch_array($data1);

    $path = $result['image_source'];
    unlink($path);

     $query = "DELETE FROm featured where id = '$id' ";
     $data = mysqli_query($conn, $query);

  if($data)
{
	echo "<script>alert('Record Deleted ')</script>";

?>
	<meta http-equiv="refresh" content="0;url=http://localhost/restaurant1/featured_show.php">

<?php
}
else
{
	echo "<script>alert('Failed to delete')</script>";
}
?>