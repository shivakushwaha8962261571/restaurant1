<?php
    include("connection.php")
?>

<?php

$name_error = "";
$name = "";

  if($_POST['submit'])
  {
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $number = $_POST['contact'];
    $gender = $_POST['gender'];
    $message= $_POST['message'];

    if(empty($name))
    {
      $name_error = " name cannot be empty";
    }
    else if(strlen($name) > 2)
    {
      $name_error = " name cannot be less than 2 character";
    }
     else if(strlen($name) < 200)
    {
      $name_error = " name cannot be less than 2 character";
    }

    $query = "INSERT INTO contact (name,email,contact,gender,message) values ('$name','$email','$number','$gender','$message')";

    $data = mysqli_query($conn,$query);
    if($data)
    {
      echo "<script>alert('Contact form submitted') </script>";
    }
    else
    {
       if(mysqli_errno($conn) == 1062)
       {
        echo "<script>alert('This email is already exists') </script>";
       }
       else
       {
        echo "<script>alert('Failed') </script>";
       }
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
  <link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" type="text/css" href="style.css">
  

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
            -webkit-text-stroke-color: black; color: orange;">Contact Us</span>
            </h1>
    		<p style="font-family: Pacifico; font-size: 40px">The Best Restaurant</p>

    		<br>
    		
    		<button style="background-color: green; margin-left: 10px; width: 300px;"><a href="tel:+918962261571">Call Us</a></button>

    		<br>
    		<img src="images/chef2.png" width="35%" style="margin-top: 5%">
    	</div>

    	<div class="container-right1">
    		<div class="form">
              <form action="#" method="POST" onsubmit="return validateForm()">
                  <input type="text" placeholder="Your Name ?...." name="name" id="name">
                  <!-- <span style="color: red;">
                    <?php echo $name_error; ?>
                  </span> -->
                  <br>

                  <input type="text" placeholder="Your Email ?...." name="email" id="email">
                  <br>

                  <input type="text" placeholder="Contact Number ?...." name="contact" id="numberr">
                  <br>
                  <select name="gender" id="gender">
                      <option value="" disabled selected>Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option vale="Other">Other</option>
                  </select>
                  <br>
              

                   <textarea placeholder="Type Your Message ?..." name="message" id="message"></textarea> 
              <br>
              <input type="Submit" value="Submit" name="submit">
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


<script>
  function validateForm() 
  {
    let name = document.getElementById("name").value.trim();

    //check name for empty
    if(name === "")
    {
      alert(" name cannot be empty");
      return false;
    }
    if(name.length<2)
    {
      alert(" name cannot be one alphabet");
      return false;
    }
    if(name.length>40)
    {
      alert(" name cannot be more than 40 character");
      return false;
    }
    
    let namePattern = /^[A-Za-z ]+$/;

    if(!namePattern.test(name))
    {
       alert("name can only be alphabet");
      return false;
    }
                   //email validate

    let email = document.getElementById("email").value.trim();
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(email === "")
    {
      alert("Email cannot be empty");
      return false;
    }
    if(!emailPattern.test(email))
    {
      alert("Please enter a valid email address");
      return false;
    }

                    //mobaile number validation

    let number = document.getElementById("numberr").value.trim();
    let numberPattern = /^[0-9]{10}$/;

    if(number === "")
    {
      alert("mobaile number cannot be empty");
      return false;
    }
    if(!numberPattern.test(number))
    {
      alert("mobaile number can be only a 0-9");
      return false;
    }
    if(number.charAt(0) === "0")
    {
      alert("mobaile number cannot start with zero");
      return false;
    }

             //gender validation code

    let gender = document.getElementById("gender").value;
    if(gender === "")
    {
      alert("please select gender first");
      return false;
    }

                 //validation code for text area

    let message = document.getElementById("message").value.trim();

    if(message === "")
    {
      alert("message cannot be empty");
      return false;
    }

    if(message.length<10)
    {
      alert("message cannot be less than 10 character");
      return false;
    }
    if(message.length>200)
    {
      alert("message cannot be more than 200 character");
      return false;
    }

    return true;
  }
</script>


</body>
</html>


