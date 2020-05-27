<?php
require 'db.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $sql = "SELECT * from users where (email='$email' and  password='$pass')";
$query=mysqli_query($con,$sql);
}

if (session_status()==PHP_SESSION_NONE) {
  session_start();
}

  if ($query->fetch_row()) {
    $data=$con->query($sql)->fetch_assoc();
    unset($_SESSION['login_error']);
    var_dump($data);
    $_SESSION['name']=$data['name'];
    $_SESSION['username']=$data['username'];
    $_SESSION['email']=$data['email'];
    $_SESSION['id']=$data['id'];
    header('location:index.php');
    // code...
  }
  // code...
  else {
  $_SESSION['login_error']="Invalid email/password.Try again";
  header('location:login.php');
  // code...
}


 ?>
