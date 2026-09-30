 <!DOCTYPE html>
 <html>
 <head>
     <title></title>

     <style>
         *
{
    margin: 0;
    padding: 0;box-sizing: border-box;
}

#menu ul
{
    border: 0px solid black;
    list-style: none;
    position: fixed;
    width: 100%;
    z-index: 10;

}

#menu ul li
{
    border: 0px solid white;
    background-color: #02A237;
    width: 16.66%;
    height: 50px;
    line-height: 50px;
    font-size: 22px;
    text-align: center;
    color: white;
    float: left;
    position: relative;
}

#menu ul li a
{
    text-decoration: none;
    color: white;
    display: block;
}

#menu ul li a:hover
{
    background-color: orange;
}


#menu ul li ul li
{
    width: 315px
}

#menu ul ul
{
    position: absolute;
    display: none;
}

#menu ul li:hover > ul
{
    display: block;
}
     </style>
 </head>
 <body>
                                <!--  code for menu bar -->
    <div id="menu">
        <UL>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="">Food</a>
                 <ul>
                    <li><a href="">Pizza</a></li>
                    <li><a href="">Dhosa</a></li>
                    <li><a href="">Cacke</a></li>
                    <li><a href="">Samosa</a></li>
                    <li><a href="">Ice-cream</a></li>
                 </ul>
            </li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="order.php">order</a></li>
            <li><a href="contact.php">Contect</a></li>
        </UL>
    </div>

                                 <!--   end code for menu bar -->
 </body>
 </html>


    