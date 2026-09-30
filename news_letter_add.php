<?php
include("connection.php");

if($_POST['submit'])
{
    $email = $_POST['email'];

    $query = "INSERT INTO news_letter (email) values ('$email')";
    $data = mysqli_query($conn, $query);

    if($data)
    {
        echo "<script>alert('data inserted into database') </script>";
        ?>
         <meta http-equiv="refresh" content="0; url=http://localhost/restaurant1/contact.php">

        <?php
    }
    else
    {
        echo "failed";
    }
}
?>