
 <?php
  session_start();
  $_con = mysqli_connect("localhost","root","","e-store")
         or die(mysqli_error($_con));
  mysqli_select_db($_con,'e-store');
 ?>
