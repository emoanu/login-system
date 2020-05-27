<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
  include 'db.php';
  $new_pword=md5($_POST['new_password']);
  $old_pword=md5($_POST['old_password']);
  if (session_status()==PHP_SESSION_NONE) {
    session_start();
    // code...
  }

    $login_id=$_SESSION['id'];
    $sql = "SELECT password from users where id = '$login_id'";
    $query = mysqli_query($con,$sql);
    $password = mysqli_fetch_row($query)[0];
    if($password==$old_pword){
      $sql="UPDATE users SET password='$new_pword' where id='$login_id'";
      $query=mysqli_query($con,$sql);
      if ($query) {
        echo "Your password has been successfully changed";
        }
    else {
      echo "Oops!Something went wrong.Retype your new password.";
    //header('location:settings.php');
    }
  }else{
    echo "old password is incorrect";
  }
    // code...
  }
  // include 'db.php';
  // $sql = "SELECt * from users";
  // $query = mysqli_query($con,$sql);
  // while ($row= mysqli_fetch_array($query)) {
  //   $password = md5($row['password']);
  //   $user_id = $row['id'];
  //   $sql2  = "UPDATE users set password = '$password' where id='$user_id'";
  //   mysqli_query($con,$sql2);
  // }
  // code...




 ?>
