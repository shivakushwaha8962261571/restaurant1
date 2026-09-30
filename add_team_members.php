<?php
include("side_nav.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Team Memeber</title>
	<link rel="stylesheet" type="text/css" href="css/add_featured.css">
</head>
<body>






<h1 align="center" style="font-size: 45px; margin-bottom: 2%; margin-left: 13%;">Add Team Memeber</h1>

<h2 align="center" style="margin-left: 13%;"><mark>Add Team Memeber</mark></h2>

<center>

<div class="container">
	<div class="form">
		 <form action="#" method="POST" enctype="multipart/form-data">
		 	<input type="file" name="uploadfile" style="width: 100%; height: 60px; padding: 5px;">
		 	<br>
		 	<input type="submit" value="Upload Image" name="submit">
		 </form>
	</div>
</div>

</center>
</body>
</html>

<?php
        include("connection.php");
        error_reporting(0);

if($_POST['submit'])
{
	 $filename = $_FILES["uploadfile"]["name"];
      $tempname = $_FILES["uploadfile"]["tmp_name"];
      $folder   = "images1/team members/".$filename;
      // echo $folder;
      move_uploaded_file($tempname, $folder);


      $query = "INSERT INTO team_members (image_source) values ('$folder') ";
      $data = mysqli_query($conn, $query);

      if($data)
      {
      	echo "<script>alert('File Uploaded')</script>";
      }
      else
      {
      	echo "<script>alert('Failed')</script>";
      }
}
?>
