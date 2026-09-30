<!DOCTYPE html>
<html>
<head>
	<title>Show Featured Items</title>
	<link rel="stylesheet" type="text/css" href="css/contact show.css">
</head>
<body>

</body>
</html>


<?php
include("connection.php");
include("side_nav.php");


$query = "SELECT * FROM featured";
$data  = mysqli_query($conn,$query);

$total  = mysqli_num_rows($data);

if($total != 0)
{
?>
<h1 align="center" style="font-size: 45px; margin-bottom: 2%; margin-left: 13%;">Featured Products Details</h1>

<h2 align="center" style="margin-left: 13%;"><mark>Displaying All Records</mark></h2>
<center><table border="3" width="76%" cellspacing="0" style="margin-left: 19%;">
	<tr>
	<th width="15%">ID</th>
	<th width="60%">Item Image</th>
	<th width="20%">Operations</th>
    
    </tr>

<?php  
	while ($result = mysqli_fetch_assoc($data)) 
	{
	    echo "<tr>
	           <td align= 'center'>".$result['id']."</td>
	           <td><img src =' ".$result['image_source']." ' width= '12%' ></div></td>


	          
	           <td align= 'center'>
                
                 
               
	           	<a href='featured_delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete_btn' name='delete_btn' onclick='return checkdelete()'></a></td>
             </form>
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

<script>
	function checkdelete()
	{
		return confirm('Are you sure you want to delete this record ?');
	}
</script>