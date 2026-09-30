<!DOCTYPE html>
<html>
<head>
	<title>Order status</title>
	<link rel="stylesheet" type="text/css" href="css/contact show.css">
</head>
<body>

</body>
</html>


<?php
 
include("connection.php");
include("side_nav.php");
$id = $_GET['id'];

$query = "SELECT * FROM orderpage where id='$id'";
$data  = mysqli_query($conn,$query);

$total  = mysqli_num_rows($data);

if($total != 0)
{
?>
<h1 align="center" style="font-size: 45px; margin-bottom: 2%; margin-left: 13%;">Change Order Status</h1>

<h2 align="center" style="margin-left: 13%;"><mark>Displaying All Orders</mark></h2>
<center><table border="3" width="76%" cellspacing="0" style="margin-left: 19%;">
	<tr>
	<th width="3%">ID</th>
	<th width="16%">Name</th>
	<th width="6%">Table No</th>
	<th width="6%">Gender</th>
	<th width="9%">Contact</th>
	<th width="20%">Food Item</th>
	<th width="18%">Description</th>
	<th width="28%">Operations</th>
    
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

	           <td align= 'center'>
                
             <form action='#' method='POST'>
	           	

	   <select name='order_status' style=' width: 90px; height: 30px; font-size: 17px; border: 0px; outline: none; cursor: pointer;'>>
	     <option>Status</option>
	     <option value='Pending' ".($result['order_status']=='Pending'?'selected':'')." style='background-color: #D6D6D6;'>Pending</option>
	     <option value='Completed' ".($result['order_status']=='Completed'?'selected':'')." style='background-color: green; color: white;'>Completed</option>
	     <option value='Cancelled' ".($result['order_status']=='Cancelled'?'selected':'')." style='background-color: red; color: white;'>Cancelled</option>
	   </select>
               
	           <input type='submit' value='Change' name='status' class='delete_btn' name='delete_btn' style='background-color:#308DFF '></td>
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

<?php
$id = $_GET['id'];
   if($_POST['status'])
   {
      $order_status = $_POST['order_status'];
      $query1 = "update orderpage set order_status = '$order_status' where id = '$id' ";

      $data = mysqli_query($conn, $query1);
      if($data)
      {
      	echo "<script>alert('Order status updated')</script>";

?>
	<meta http-equiv="refresh" content="0;url=http://localhost/restaurant1/order_show.php">

<?php
      }
      else
      {
      	echo "<script>alert('Failed')</script>";
      }
   }
?>