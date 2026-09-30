<!DOCTYPE html>
<html>
<head>
	<title>Display News letter Records</title>
	<link rel="stylesheet" type="text/css" href="css/contact show.css">
</head>
<body>

</body>
</html>


<?php
include("connection.php");
include("side_nav.php");


$query = "SELECT * FROM news_letter";
$data  = mysqli_query($conn,$query);

$total  = mysqli_num_rows($data);

if($total != 0)
{
?>
<h1 align="center" style="font-size: 45px; margin-bottom: 2%; margin-left: 13%;">News Letter</h1>

<h2 align="center" style="margin-left: 13%;"><mark>Displaying All Enquiries</mark></h2>
<center><table border="3" width="76%" cellspacing="0" style="margin-left: 19%;">
	<tr>
	<th width="3%">ID</th>
	<th width="15%">EMAIL</th>
    </tr>

<?php  
	while ($result = mysqli_fetch_assoc($data)) 
	{
	    echo "<tr>
	           <td align= 'center'>".$result['id']."</td>
	           <td>".$result['email']."</td>
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