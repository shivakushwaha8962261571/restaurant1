<!DOCTYPE html>
<html>
<head>
	<title>display contact form records</title>
	<link rel="stylesheet" type="text/css" href="css/contact show.css">
</head>
<body>

</body>
</html>


<?php
include("connection.php");
include("side_nav.php");


$query = "SELECT * FROM CONTACT";
$data  = mysqli_query($conn,$query);

$total  = mysqli_num_rows($data);

if($total != 0)
{
?>
<h1 align="center" style="font-size: 45px; margin-bottom: 2%; margin-left: 13%;">Contact Form</h1>

<h2 align="center" style="margin-left: 13%;"><mark>Displaying All Enquiries</mark></h2>
<center><table border="3" width="76%" cellspacing="0" style="margin-left: 19%;">
	<tr>
	<th width="3%">ID</th>
	<th width="12%">NAME</th>
	<th width="15%">EMAIL</th>
	<th width="7%">CONTACT</th>
	<th width="6%">GENDER</th>
	<th width="33%">MESSAGE</th>
    </tr>

<?php  
	while ($result = mysqli_fetch_assoc($data)) 
	{
	    echo "<tr>
	           <td align= 'center'>".$result['id']."</td>
	           <td>".$result['name']."</td>
	           <td>".$result['email']."</td>
	           <td align= 'center'>".$result['contact']."</td>
	           <td align= 'center'>".$result['gender']."</td>
	           <td align= 'center'>".$result['message']."</td>
              </tr>
             ";
	}
}
else
{
	echo "No Record Found";
}
?>

</table>
</center>