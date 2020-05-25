<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HomePage</title>
    <?php
    include 'bootstrap.php';
    ?>

  </head>
  <body>
    <div class="container">
      <br>
      <br>
      <?php
      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }
      if (isset($_SESSION['username'])) {
        ?>
        <h2>Welcome <?php echo $_SESSION['name'] ; ?>!</h2>
        <h3>username: <?php echo $_SESSION['username'] ; ?>!</h2>
        <h3>email : <?php echo $_SESSION['email'] ; ?>!</h2>
        <a class="btn btn-danger" href="logout.php">Logout</a>
        <?php
      }
      else{
      ?>
      <h2>Login if you already have an account or register now.</h2>
      <a href="login.php" class="btn btn-primary">Login</a>
      <a href="registration.php" class="btn btn-warning">Register</a>
    <?php }
      ?>
    </div>
  </body>
</html>
