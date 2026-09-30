<?php include("connection.php") ?>

<!DOCTYPE html>
<html>
<head>
	<title>Order Us</title>

	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/order.css">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Pacifico&family=Playwrite+NZ+Guides&display=swap" rel="stylesheet">
</head>
<body>

                                 <!--  code for menu bar -->
   <?php include("menubar.php"); ?>

                                 <!--   end code for menu bar -->


     <div class="container">
    	<div class="container-left">
    		<h1 style="font-family: Pacifico; font-size: 70px">
            
            <span style="-webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: black; color: orange;">Order Now</span>
            </h1>
    		<p style="font-family: Pacifico; font-size: 40px">The Best Restaurant</p>

    		<br>
    		
    		<button style="background-color: green; margin-left: 10px; width: 300px;"><a href="tel:+918962261571">Order Over Call</a></button>

    		<br>
    		<img src="images/eating.png" width="35%" style="margin-top: 5%">
    	</div>

    	<div class="container-right1">
    		<div class="form">
              <form action="#" method="POST">
                  <input type="text" placeholder="Your Name ?...." name="name">
                  <br>
                  <select name="table_no">
                      <option value="Not Selected">Select Table Number</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                  </select>
                  <br>

                  <input type="radio" name="gender" value="male"><label style="margin-left: 15px; color: #575757">male</label>
                  <input type="radio" name="gender" value="female"><label style="margin-left: 15px; color: #575757">female</label>
                  <input type="radio" name="gender" value="other"><label style="margin-left: 15px; color: #575757">other</label>

                  <br>
                  <br>

                   <input type="text" placeholder="Mobile NUmber ?...." name="number">
                   <br>
                   <input type="checkbox" name="food[]" value="pizza"><span>Pizza</span>
                   <input type="checkbox" name="food[]" value="burger"><span>Burger</span>
                   <input type="checkbox" name="food[]" value="samosa"><span>Samosa</span>
                   <input type="checkbox" name="food[]" value="cacke"><span>Cacke</span>
                   <input type="checkbox" name="food[]" value="pastery"><span>Pastery</span>
                   <input type="checkbox" name="food[]" value="pav_bhaji"><span>Pav bhaji</span>
                   <input type="checkbox" name="food[]" value="litti"><span>Litti</span>
                   <input type="checkbox" name="food[]" value="chaat"><span>Chaat</span>
                   <input type="checkbox" name="food[]" value="ice-cream"><span>Ice-cream</span>
                   <input type="checkbox" name="food[]" value="momos"><span>Momos</span>
                   <input type="checkbox" name="food[]" value="paneer"><span>Paneer</span>
                   <input type="checkbox" name="food[]" value="cold_cofee"><span>Cold-Coffee</span>
                   <input type="checkbox" name="food[]" value="green tea"><span>Green Tea</span>
                   <input type="checkbox" name="food[]" value="poha"><span>Poha</span>
                   
              <br>
              <br>

                   <textarea placeholder="Full Plate / Half Plate / And Additional Requirement ?..." name="description"></textarea> 
              <br>
              <input type="submit" value="Order Now" name="submit"> 
              <br>
              <br>
              <p>Address: 101, Jabalpur,Pin: 482002, Madhyapradesh,India 
              <br>
              Contact: +91 8962261571 
              <br>
              Email : ShivaKushwaha@srit.net
              </p>  
              </form>
             
            </div>
    	</div>
    </div>

    
         <!-- starting code for subscrbe -->

     <?php include("news_letter.php"); ?>

                       <!-- ending code for subscribe -->
                     

                     <!-- string code of footer -->
  <?php include("footer.php"); ?>

                  <!--    ending code for footer -->
</body>
</html>

<?php 
  if($_POST['submit'])
  {
    $name        = $_POST['name'];
    $table_no    = $_POST['table_no'];
    $gender      = $_POST['gender'];
    $number      = $_POST['number'];

    $food_item   = $_POST['food'];
    $food_item1  = implode(", " ,$food_item);
    echo "$foot_item";

    $description = $_POST['description'];

    $query = "INSERT INTO orderpage (name,table_no,gender,contact,food_item,description) values('$name','$table_no','$gender','$number','$food_item1','$description')";

    $data = mysqli_query($conn,$query);

    if($data)
     {
      echo "<script>alert('Order Placed') </script>";
    }
    else
    {
      echo "<script>alert('Failed') </script>";
    }
  }
?>