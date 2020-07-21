
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
  include 'db.php';
  $new_name=$_POST['new_name'];
  if (session_status()==PHP_SESSION_NONE) {
    session_start();
    // code...
  }
  $login_id=$_SESSION['id'];
$sql="SELECT * FROM users where username='$new_name'";
$query=mysqli_query($con,$sql);
 // $row=mysqli_fetch_array($query);
if (mysqli_num_rows($query)==0) {
  $sql="UPDATE users SET username='$new_name' where id='$login_id'";
  $query=mysqli_query($con,$sql);
  echo "username changed";
  $_SESSION['username']=$new_name;

}else {
  echo "Username already exists";
}


}
 ?>
