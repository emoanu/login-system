<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD']=="POST") {
  $username = $_POST['username'];
  $name = $_POST['name'];
  $email = $_POST['mail'];
  $pass = $_POST['pword'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $age = $_POST['age'];

  $sql ="INSERT into users (id,name,username,email,password,gender,age_group,dob) values(NULL,'$name','$username','$email','$pass','$gender','$age','$dob')";
  $result = mysqli_query($con,$sql);
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  if ($result) {
    $_SESSION['login_success']="Successfully registered.Please login";
    header('location:login.php');
  }else{
    echo "something went wrong";
    header('location:registration.php');
  }
}
 ?>
