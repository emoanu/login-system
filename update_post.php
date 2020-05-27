<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit posts</title>
  </head>
  <body>
    <?php
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    include 'db.php';
    $post_id = $_POST['post_id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    if(session_status()==PHP_SESSION_NONE){
      session_start();
    }
    $login_id = $_SESSION['id'];
    $sql ="select author_id from user_posts where id = '$post_id'";
    $query = mysqli_query($con,$sql);
    $result = mysqli_fetch_row($query);
    $author_id = $result[0];
    if($author_id!=$login_id){
      header('location:posts.php');
    }

    $sql = "update user_posts set title = '$title' , content = '$content' where id = '$post_id'";
    if(mysqli_query($con,$sql)){
      echo "post has been successfully updated";
    }else{
      echo "something went horrible";
    }
    echo "<a href=posts.php>click here </a>";

  }
  ?>
  </body>
</html>
