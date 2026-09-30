
<!DOCTYPE html>
<html>
<head>
	<title>RESTAURANT PROJECT</title>

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Pacifico&family=Playwrite+NZ+Guides&display=swap" rel="stylesheet">
    <!-- Add icon library -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
                                 <!--  code for menu bar -->
   <?php include("menubar.php"); ?>

                                 <!--   end code for menu bar -->

    <div class="container">
    	<div class="container-left">
    		<h1 style="font-family: Pacifico; font-size: 70px">
            <span style="-webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: black; color: green;">Lest's</span> 
            Eat 
            <span style="-webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: black; color: orange;">Together</span>
            </h1>
    		<p style="font-family: Pacifico; font-size: 40px">The Best Restaurant</p>

    		<br>
    		<button style="background-color: orange; margin-right: 10px">View MOre</button>
    		<button style="background-color: green; margin-left: 10px">Order Now</button>

    		<br>
    		<img src="images/eating.png" width="35%" style="margin-top: 5%">
    	</div>

    	<div class="container-right">
    		<img src="images/hero.png">
    	</div>
    </div>

                                        <!--  code for why choose us -->
<center>                                  
    <h1 style="font-size: 40px;">Why Choose Us ?</h1>
    <hr>
    <br>
    <br>
    <br>

    <div class="featured-outer">

        <div class="featured-icon">
            <i class="fa fa-cutlery" style="color: orange;"></i>
            <p>Fresh Food</p>
            
        </div>

         <div class="featured-icon">
            <i class="fa fa-clock-o"  style="color: green;"></i>
            <p>24*7</p>

        </div>

         <div class="featured-icon">
            <i class="fa fa-motorcycle"  style="color: orange;"></i>
            <p>Fast Delivery</p>
        </div>

         <div class="featured-icon">
           <i class="fa fa-birthday-cake"  style="color: green;"></i>
           <p>Birthday Space</p>
        </div>

         <div class="featured-icon">
            <i class="fa fa-star"  style="color: orange;"></i>
            <p>259 Reviews</p>
        </div>

    </div>
</center>

                  <!-- code for dynamic gallery/ featured images -->

     <br>
     <br>
     <br>
<center>
    <h1 style="font-size: 40px;">Featured Food Item</h1>
    <hr>
    <br>
    <br>

    <div class="featured-outer1">
       <!--  <div class="featured-img">
            <img src="images/cake7.png">
        </div> -->

        <?php
      include("connection.php");

      $query = "select *from featured";
      $data  = mysqli_query($conn, $query);

      $total  = mysqli_num_rows($data);
      // echo $total;

      if($total != 0)
      {
         while($result = mysqli_fetch_assoc($data))
         {
            
            echo "<div class='featured-img'>
            <img src =' ".$result['image_source']." ' width= '10%' ></div>
            ";
         }
      }
      else
      {
        echo "no record found";
      }
?>

    </div>
</center>

                       <!--   code for our speciality -->
<center>
     <br>
     <br>
     <br>
    <h1 style="font-size: 40px;">Our Speciality</h1>
    <hr>
    <br>
    <br>

<div class="content">
    <div class="left">
        <img src="images/samosa3.jpg">
    </div>
    <div class="right"><p>Samosa

        Samosa is one of the most popular and delicious snacks in India. It is loved by people of all age groups and is easily available in almost every city and village. A hot and crispy samosa with green chutney and sweet tamarind chutney is a favorite snack for many people. It is especially enjoyed with a cup of hot tea in the evening.

        A samosa is usually made from refined flour, also known as maida. The dough is prepared and rolled into a thin sheet. A spicy filling is then placed inside it. The most common filling is made from boiled potatoes, peas, onions, and different Indian spices. The dough is folded into a triangular shape and deep-fried in hot oil until it becomes golden brown and crispy.

        There are many varieties of samosas available today. Apart from the traditional potato samosa, people can also enjoy paneer samosa, cheese samosa, vegetable samosa, dal samosa, and even noodles samosa. Some people also prefer baked samosas instead of fried ones because they contain less oil.</p>

        <p>Samosa is not only popular in India but is also enjoyed in many other countries. Indian restaurants around the world often serve samosas as an appetizer or snack. Its delicious taste and crispy texture have made it popular among people from different cultures.

        Samosa is commonly eaten during festivals, family gatherings, parties, and special occasions. It is also a popular street food. Small tea shops and food stalls often sell fresh and hot samosas. The combination of samosa and tea is especially famous in India.

        Although samosa is very tasty, eating too many fried samosas may not be good for health. Since traditional samosas are deep-fried, they can contain a high amount of oil and calories. Therefore, they should be eaten in moderation. Choosing baked samosas or preparing them with healthier ingredients can be a better option.

        In conclusion, samosa is more than just a snack. It is an important and beloved part of Indian food culture. Its crispy outer layer, spicy filling, and delicious taste make it special. Whether enjoyed with friends, family, or a cup of tea, a hot samosa always brings happiness and satisfaction. It represents the rich taste and variety of Indian cuisine.</p>
    </div>
    
</div>

</center>

 <br>
 <br>

<center>
<div class="content">
    
    <div class="right"><p>Samosa

        Samosa is one of the most popular and delicious snacks in India. It is loved by people of all age groups and is easily available in almost every city and village. A hot and crispy samosa with green chutney and sweet tamarind chutney is a favorite snack for many people. It is especially enjoyed with a cup of hot tea in the evening.

        A samosa is usually made from refined flour, also known as maida. The dough is prepared and rolled into a thin sheet. A spicy filling is then placed inside it. The most common filling is made from boiled potatoes, peas, onions, and different Indian spices. The dough is folded into a triangular shape and deep-fried in hot oil until it becomes golden brown and crispy.

        There are many varieties of samosas available today. Apart from the traditional potato samosa, people can also enjoy paneer samosa, cheese samosa, vegetable samosa, dal samosa, and even noodles samosa. Some people also prefer baked samosas instead of fried ones because they contain less oil.</p>

        <p>Samosa is not only popular in India but is also enjoyed in many other countries. Indian restaurants around the world often serve samosas as an appetizer or snack. Its delicious taste and crispy texture have made it popular among people from different cultures.

        Samosa is commonly eaten during festivals, family gatherings, parties, and special occasions. It is also a popular street food. Small tea shops and food stalls often sell fresh and hot samosas. The combination of samosa and tea is especially famous in India.

        Although samosa is very tasty, eating too many fried samosas may not be good for health. Since traditional samosas are deep-fried, they can contain a high amount of oil and calories. Therefore, they should be eaten in moderation. Choosing baked samosas or preparing them with healthier ingredients can be a better option.

        In conclusion, samosa is more than just a snack. It is an important and beloved part of Indian food culture. Its crispy outer layer, spicy filling, and delicious taste make it special. Whether enjoyed with friends, family, or a cup of tea, a hot samosa always brings happiness and satisfaction. It represents the rich taste and variety of Indian cuisine.</p>
    </div>

    <div class="left">
        <img src="images/samosa4.jpg">
    </div>
    
</div>

</center>

<br>
 <br>

<center>
<div class="content">
    <div class="left">
        <img src="images/dhokla3.jpg">
    </div>
    <div class="right"><p>Samosa

        Samosa is one of the most popular and delicious snacks in India. It is loved by people of all age groups and is easily available in almost every city and village. A hot and crispy samosa with green chutney and sweet tamarind chutney is a favorite snack for many people. It is especially enjoyed with a cup of hot tea in the evening.

        A samosa is usually made from refined flour, also known as maida. The dough is prepared and rolled into a thin sheet. A spicy filling is then placed inside it. The most common filling is made from boiled potatoes, peas, onions, and different Indian spices. The dough is folded into a triangular shape and deep-fried in hot oil until it becomes golden brown and crispy.

        There are many varieties of samosas available today. Apart from the traditional potato samosa, people can also enjoy paneer samosa, cheese samosa, vegetable samosa, dal samosa, and even noodles samosa. Some people also prefer baked samosas instead of fried ones because they contain less oil.</p>

        <p>Samosa is not only popular in India but is also enjoyed in many other countries. Indian restaurants around the world often serve samosas as an appetizer or snack. Its delicious taste and crispy texture have made it popular among people from different cultures.

        Samosa is commonly eaten during festivals, family gatherings, parties, and special occasions. It is also a popular street food. Small tea shops and food stalls often sell fresh and hot samosas. The combination of samosa and tea is especially famous in India.

        Although samosa is very tasty, eating too many fried samosas may not be good for health. Since traditional samosas are deep-fried, they can contain a high amount of oil and calories. Therefore, they should be eaten in moderation. Choosing baked samosas or preparing them with healthier ingredients can be a better option.

        In conclusion, samosa is more than just a snack. It is an important and beloved part of Indian food culture. Its crispy outer layer, spicy filling, and delicious taste make it special. Whether enjoyed with friends, family, or a cup of tea, a hot samosa always brings happiness and satisfaction. It represents the rich taste and variety of Indian cuisine.</p>
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