<!DOCTYPE html>
<html>
<head>
	<title>Add News Letter</title>
	<link rel="stylesheet" type="text/css" href="css/news_letter_add_admin.css">
</head>
<body>

</body>



<?php
include("connection.php");
include("side_nav.php");
?>
<h1 align="center" style="font-size: 45px; margin-bottom: 2%; margin-left: 13%;">Add News Letter</h1>

<h2 align="center" style="margin-left: 13%;"><mark>Please provide an email address here</mark></h2>
<center>
<div class="container">
	<div class="form">
		<form action="#" method="POST">
			<input type="email" name="email" placeholder="Enter an email address here.....!" required>
			<br>
			<br>
			<br>
			<input type="submit" name="submit" value="Add News letter">
		</form>
	</div>
</div>
</center>

</html>



<?php

if($_POST['submit'])
{
    $email = $_POST['email'];

    $query = "INSERT INTO news_letter (email) values ('$email')";
    $data = mysqli_query($conn, $query);

    if($data)
    {
        echo "<script>alert('data inserted into database') </script>";

    }
    else
    {
        echo "failed";
    }
}
?>