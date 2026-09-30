<?php include("connection.php");  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="dashboard.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container1">
	<div class="leftdiv">
		      <div class="sidenav">
                <a href="dashboard.php">dashboard</a>
                <a href="contact display.php">Contact Form</a>
                <button class="dropdown-btn">Featured 
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                <a href="featured_show.php">Show</a>
                <a href="add_featured_item.php">Add</a>
                </div>

                <button class="dropdown-btn">News Letter 
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                <a href="news_letter_show.php">Show</a>
                <a href="news_letter_add_admin.php">Add</a>
                </div>

                <button class="dropdown-btn">Team Member 
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                <a href="#">Show</a>
                <a href="add_team_members.php">Add</a>
                <a href="#">Update</a>
                <a href="#">Remove</a>
                </div>

                <button class="dropdown-btn"> Menu item
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                <a href="#">Show</a>
                <a href="#">Add</a>
                <a href="#">Update</a>
                <a href="#">Remove</a>
                </div>

                <button class="dropdown-btn"> Orders
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                <a href="order_show.php">Show</a>
                <a href="pending_order.php">Pending</a>
                <a href="completed_order.php">completed</a>
                <a href="cancelled_order.php">Cancelled</a>
                </div>

                <button class="dropdown-btn"> Food Items
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                <a href="#">Show</a>
                <a href="#">Add</a>
                <a href="#">Update</a>
                <a href="#">Remove</a>
                </div>

                 <button class="dropdown-btn">Profile
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                <a href="#">Change Password</a>
                <a href="#">Logout</a>
                </div>

               </div>
	</div>
	<div class="rightdiv">
		<center><h1 style="font-size: 45px;">ADMI DASHBOARD</h1></center>
		<div class="rightdiv-inner">
			<div class="innervalue" style="background-color: #F3BF00;">
				<i class="fa fa-newspaper-o" aria-hidden="true"></i>
				
                <?php
                $query = "Select * from news_letter";
                $data  = mysqli_query($conn,$query);
                $total = mysqli_num_rows($data);
                echo "<p style = 'font-size:40px;'>".$total;
                ?>

				<P>News letter</P>
			</div>
			<div class="innervalue" style="background-color: #006DDA;">
				<i class="fa fa-indent" aria-hidden="true"></i>
				<p>Menu Item</p>
			</div>
			<div class="innervalue" style="background-color: #009B36;">
				<i class="fa fa-info-circle" aria-hidden="true"></i>
                
                 <?php
                $query = "Select * from orderpage";
                $data  = mysqli_query($conn,$query);
                $total = mysqli_num_rows($data);
                echo "<p style = 'font-size:40px;'>".$total;
                ?>

				<p>Orders</p>
			</div>
		</div>

		<div class="rightdiv-inner1">
			<div class="innervalue" style="background-color: #F3013B;">
				<i class="fa fa-envelope-o" aria-hidden="true"></i>

                 <?php
                $query = "Select * from contact";
                $data  = mysqli_query($conn,$query);
                $total = mysqli_num_rows($data);
                echo "<p style = 'font-size:40px;'>".$total;
                ?>

				<p>Contact Form</p>
			</div>
			<div class="innervalue" style="background-color: #6D6D6D;">
				<i class="fa fa-list-ol" aria-hidden="true"></i>
				<p>Food Item</p>
			</div>
			<div class="innervalue" style="background-color: #B36Bff;">
				<i class="fa fa-user" aria-hidden="true"></i>
				<p>Team Member</p>
			</div>
		</div>
	</div>
</div>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>
</html>