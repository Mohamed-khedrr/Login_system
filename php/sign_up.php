<?php

$fname = $_POST['fname'] ;
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$user = $_POST['user'];
$password = $_POST['password'];
$gender = $_POST['gender'];

$link = mysqli_connect('localhost','root','','login_system');
$insert="INSERT INTO `users` (`fname`,`lname`,`phone`,`email`,`user_name`,`password`,`gender`) VALUES ('$fname','$lname','$phone','$email','$user','$password','$gender')";
mysqli_query($link,$insert);
header('LOCATION:login.php');