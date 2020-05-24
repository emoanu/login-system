<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include 'bootstrap.php'; ?>
    <title></title>
  </head>
  <body>
    <form class="" action="login_handler.php" method="post">
<?php
if (session_status()==PHP_SESSION_NONE) {
  session_start();
  // code...
}
if (isset($_SESSION['login_error'])) {
  echo "<span class=error".$_SESSION['login_error']."</span>";
  unset($_SESSION['login_error']);
}
if (isset($_SESSION['Success'])) {
  echo "echo class=success".$_SESSION['login_success']."</span>";
  unset($_SESSION['login_success']);
  // code...
}




 ?>



      <input type="email" name="email" value=""> <br>
      <input type="password" name="pass" value=""> <br>
      <input type="submit" name="" value="Login">
    </form>
  </body>
</html>
