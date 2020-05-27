<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HomePage</title>
    <?php
    include 'bootstrap.php';
    include 'db.php';
    ?>
    <style media="screen">
      .mine{
        border:1px solid #dedede;
      }
      .post{
        padding: 10px;
      }
    </style>
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
       <div class="all-posts">
         <hr>
         <h3>Your Posts</h3>
         <?php
         $login_id = $_SESSION['id'];
         $sql = "SELECT * FROM user_posts";
         $query = mysqli_query($con,$sql);
         if(mysqli_affected_rows($con)){
        while ($row = mysqli_fetch_array($query)) {
          $author_id = $row['author_id'];
          $sql2 = "SELECT name from users where id='$author_id'";
          $query2 = mysqli_query($con,$sql2);
          $author = mysqli_fetch_row($query2)[0];
          if($author_id==$login_id){
            $classx= "mine";
          }else{
            $classx="";
          }
          ?>
          <div class="post <?php echo $classx ?>">
            <h4><?php echo $row['title'] ?></h4>
            <p><?php echo $row['content'] ?>
              created by <?php echo $author ?> on
              <?php echo $row['created_at'] ;
              if ($author_id==$login_id) {

              ?>
              <a href="edit_post.php?post_id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
              <a href="delete_post.php?post_id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
            <?php } ?>
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
