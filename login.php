<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <?php include 'bootstrap.php' ;?>
  </head>
  <body>
    <div class="container">
      <?php
      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }
      if(isset($_SESSION['login_error'])){
        echo "<span class=error>".$_SESSION['login_error']."</span>";
        unset($_SESSION['login_error']);
      }
      if(isset($_SESSION['login_success'])){
        echo "<span class=success>".$_SESSION['login_success']."</span>";
        unset($_SESSION['login_success']);
      }
      ?>
      <form class="" action="login_handler.php" method="post">
        <input placeholder="Enter your email" class="form-control" type="email" name="email" value=""> <br>
        <input placeholder="Enter your password" type="password" class="form-control" name="pass" value=""> <br>
        <input type="submit" class="form-control" name="" value="Login">
      </form>
    </div>
  </body>
</html>
