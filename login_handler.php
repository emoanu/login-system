<?php
require 'db.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $sql = "SELECT * from users where (email='$email' and  password='$pass')";
  $query = mysqli_query($con,$sql);
  $result = mysqli_fetch_array($query);
  if(count($result)>0){
    echo "WELCOMe USER";
  }else{
    echo "Invalid email/password";
  }
}
 ?>
