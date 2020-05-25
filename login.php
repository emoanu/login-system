<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include 'bootstrap.php'; ?>
    <style media="screen">
      .container{
        background-color: #dedede;
      }
    </style>
    <title>Login</title>
  </head>
  <body>
    <div class="container">
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
  echo "<span class=success".$_SESSION['login_success']."</span>";
  unset($_SESSION['login_success']);
  // code...
}
?>
<input type="email" class="form-control" name="email" value=""> <br>
<input type="password" class="form-control" name="pass" value=""> <br>
<input type="submit" class="form-control"name="" value="Login">
    </form>
  </div>
  </body>
</html>
