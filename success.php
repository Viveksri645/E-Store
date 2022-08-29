<?php
 require("common.php");
 if(!isset($_SESSION['email'])){
     header("location:index.php");
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="jq.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>Success Message</title>
</head>
<body>
    <?php
if (isset($_POST['order'])) {
        $user_id = $_SESSION['user_id'];
        $query = "UPDATE `e-store`.`user_products` SET  status = 'CONFIRMED' where user_id=$user_id ";
        $run_query = mysqli_query($_con,$query);
              
            }

    echo "<div class='container text-center my-5 bg-light p-3'>
     <p>Thankyou for ordering on E-store. Your order shall be delivered to you shortly.</p>
     <p> Order some more electronics items <a href='Home.php'>here.</a></p>
     <p class='text-success'>Thankyou for using lifestore style.</p>
    </div>";
        

    ?>
</body>
</html>