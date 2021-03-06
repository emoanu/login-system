<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HomePage</title>
    <?php
    include 'bootstrap.php';
    include 'db.php';
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
          <h3>To visit our page.</h3>
        <a class="btn btn-primary" href="visit_page.php">Click here</a>
       <a class="btn btn-danger" href="logout.php">Logout</a>
       <div class="all-posts">
         <hr>
         <h3>Your Posts</h3>
         <?php
         $login_id = $_SESSION['id'];
         $sql = "SELECT * FROM user_posts where author_id='$login_id'";
         $query = mysqli_query($con,$sql);
         if(mysqli_affected_rows($con)){
        while ($row = mysqli_fetch_array($query)) {
          $author_id = $row['author_id'];
          $sql2 = "SELECT name from users where id='$author_id'";
          $query2 = mysqli_query($con,$sql2);
          $author = mysqli_fetch_row($query2)[0];
          ?>
          <div class="post">
            <h4><?php echo $row['title'] ?></h4>
            <p><?php echo $row['content'] ?>
              created by <?php echo $author ?> on
              <?php echo $row['created_at'] ?>
            </p>
          </div>

          <?php
        }
      }
        else{
         ?>
         <h5>No Posts found ,create one</h5>
         <?php
       }
         ?>
       </div>
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
