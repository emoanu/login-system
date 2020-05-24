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

  $sql ="INSERT into users (id,username,email,password,gender,age_group,dob) values(NULL,'$name','$username','$email','$pass','$gender','$age','$dob')";
  $result = mysqli_query($con,$sql);
  if ($result) {
    echo "Successfully registered.Please login";
  }else{

    mysqli_error($con);
  }
}
 ?>
