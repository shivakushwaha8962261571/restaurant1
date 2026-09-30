<!DOCTYPE html>
<html>
<head>
	<title>Pending Orders</title>
	<link rel="stylesheet" type="text/css" href="css/contact show.css">
</head>
<body>

</body>
</html>


<?php
include("connection.php");
include("side_nav.php");


$query = "SELECT * FROM orderpage where order_status='Pending'";
$data  = mysqli_query($conn,$query);

$total  = mysqli_num_rows($data);

if($total != 0)
{
?>
<h1 align="center" style="font-size: 45px; margin-bottom: 2%; margin-left: 13%;">Customer Order Details - Pending</h1>

<h2 align="center" style="margin-left: 13%;"><mark>Displaying All Pending Orders</mark></h2>
<center><table border="3" width="76%" cellspacing="0" style="margin-left: 19%;">
	<tr>
	<th width="3%">ID</th>
	<th width="14%">Name</th>
	<th width="6%">Table No</th>
	<th width="6%">Gender</th>
	<th width="9%">Contact</th>
	<th width="18%">Food Item</th>
	<th width="16%">Description</th>
	<th width="8%">Status</th>
	<th width="24%">Operations</th>
    
    </tr>

<?php  
	while ($result = mysqli_fetch_assoc($data)) 
	{
	    echo "<tr>
	           <td align= 'center'>".$result['id']."</td>
	           <td align= 'center'>".$result['name']."</td>
	           <td align= 'center'>".$result['table_no']."</td>
	           <td align= 'center'>".$result['gender']."</td>
	           <td align= 'center'>".$result['contact']."</td>
	           <td align= 'center'>".$result['food_item']."</td>
	           <td align= 'center'>".$result['description']."</td>
	           <td align= 'center'>".$result['order_status']."</td>

	           <td align= 'center'>
                
                          	<a href='order_status.php?id=$result[id]'>
	           	<input type='submit' value='Status' style='background-color: green; color: white; width: 70px; height: 30px; font-size: 17px; border: 0px; outline: none; cursor: pointer;'>
	           </a>
               
	           	<a href='order_delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete_btn' name='delete_btn' onclick='return checkdelete()'></a></td>
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