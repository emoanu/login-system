<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Uploads</title>
  </head>
  <body>
    <?php
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    include 'db.php';
    $title = $_POST['title'];
    $content = $_POST['content'];
    if(session_status()==PHP_SESSION_NONE){
      session_start();
    }
    $author = $_SESSION['id'];
    $sql = "INSERT into user_posts (title,content,author_id) values ('$title','$content',$author)";
    $query = mysqli_query($con,$sql);
    if($query){
      echo "your post has been successfully posted";
    }else{
      echo "Something went horrible";
    }

  }
    ?>

  </body>
</html>
