<?php include 'bootstrap.php'; ?>
<?php include 'db.php';

if(isset($_GET['post_id'])){
  $post_id = $_GET['post_id'];
  $sql = "select title,content,author_id,id from user_posts where id = '$post_id'";
  $query = mysqli_query($con,$sql);
  $result = mysqli_fetch_row($query);
  $title = $result[0];
  $content = $result[1];
  $author_id= $result[2];
  $post_id= $result[3];
  if(session_status()==PHP_SESSION_NONE){
    session_start();
  }
  if($author_id!=$_SESSION['id'] or !$query ){
    header('location:posts.php');
  }else{
    $sql = "delete from user_posts where id = '$post_id'";
    if (mysqli_query($con,$sql)) {
      header('location:posts.php');
    }else{
      echo "Something went horrible";
    }
  }
}
?>
