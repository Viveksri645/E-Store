<?php
 require("common.php");
 
  $name = mysqli_real_escape_string($_con,$_POST['name']);
  $email =  mysqli_real_escape_string($_con,$_POST['email']);
  $pass =  mysqli_real_escape_string($_con,md5($_POST['pass']));
  $contact =  mysqli_real_escape_string($_con,$_POST['contact']);
  $city =  mysqli_real_escape_string($_con,$_POST['city']);
  $add =  mysqli_real_escape_string($_con,$_POST['add']);
  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  if (!preg_match($regex_email, $email)) {
    header('location: signup.php?email_error=enter correct email');
  }
  $password = $_POST['pass'];
  if(strlen($contact))
  {
      header('location:signup.php?contact_error=enter correct number');
  }
  $_select_query = "SELECT count(*) as total FROM users where email = '".$email."' ";
  $_select_query_result = mysqli_query($_con,$_select_query);
  $rows = mysqli_fetch_array($_select_query_result);
  if($rows['total']>0){
      echo("user already exists. Signup using another email");
  }
  else{
      $_insert_query = "INSERT into `users`(`name`,`email`,`password`,`contact`,`city`,`address`)values('$name','$email','$pass','$contact','$city','$add')";
      $_insert_query_result = mysqli_query($_con,$_insert_query);
      $id_query = "SELECT id from users where email = '".$email."' ";
      $id_query_result = mysqli_query($_con,$id_query);
      $id_rows = mysqli_fetch_array($id_query_result);
      $_SESSION['user_id'] = $id_rows['id'];
      $_SESSION['email'] = $email;
      header('location:Home.php');    
  }
  ?>