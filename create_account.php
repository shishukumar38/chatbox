<?php

  $user_name = $_POST['user_name'];
  $password = $_POST['password'];
  $gmail = $_POST['gmail'];
  $phone = $_POST['phone'];
  $city = $_POST['city'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];



  $con = mysqli_connect('localhost','root','','Chatbox');
  $query = "INSERT INTO `create_account`(`user_name`, `password`, `gmail`, `phone`, `city`, `age`, `gender`) VALUES ('$user_name', '$password', '$gmail', '$phone', '$city', '$age', '$gender')";
  $run = mysqli_query($con, $query);

  if($run == TRUE){
     echo "account create";
   }
  else{
    echo "error";
    echo "$user_name";}

  ?>

  
