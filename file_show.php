<!DOCTYPE html>
<html>
<head>
	<title>File Show</title>
</head>
<body>
      
</body>
</html>


<?php
      include("connection.php");

      $query = "select *from featured";
      $data  = mysqli_query($conn, $query);

      $total  = mysqli_num_rows($data);
      // echo $total;

      if($total != 0)
      {
      	 while($result = mysqli_fetch_assoc($data))
      	 {
      	 	echo $result['id']."<br>";
      	 	echo "<img src =' ".$result['image_source']." ' width= '10%' <br>";
      	 }
      }
      else
      {
      	echo "no record found";
      }
?>