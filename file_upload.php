<!DOCTYPE html>
<html>
<head>
	<title>File Upload in PHP</title>
</head>
<body>
      <form action="#" method="POST" enctype="multipart/form-data">
      	  <input type="file" name="uploadfile">
      	  <br>
      	  <br>
      	  <input type="submit" name="submit" value="Upload Image">
      </form>
</body>
</html>

<?php
error_reporting(0);
      
      $filename = $_FILES["uploadfile"]["name"];
      $tempname = $_FILES["uploadfile"]["tmp_name"];
      $folder   = "images1/".$filename;
      // echo $folder;
      move_uploaded_file($tempname, $folder);
?>

<img src="images1/chowmeen 2.jpg" width="10%">