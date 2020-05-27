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
  }
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>

    <style media="screen">
    .container{
      background-color:#bbe;

    }
      .container-fluid{
        background-color:#def;
      }
    </style>
  </head>

  <body>
    <div class="container">
        <div class="container-fluid">
        <div class="row content">
    <div class="col-sm-3 sidenav">
    <h2>YourBlog</h2>
    <ul class="nav nav-pills nav-stacked">
      <li class="active" > <a href="index.php">Home</a> </li><br>
    <br>
      <li class="active"> <a href="#">Profile</a> </li>

      <li class="active"> <a href="#">Notification</a> </li>
      <li class="active"> <a href="#">Settings</a> </li>
      </ul>
      <br>
      <input type="search" name="search" /> <input type="submit" value="Search" /> <br>
      <br>
      <input type="file"  name="file" enctype="multipart/form-data" /><br />
       <input type="submit" name="submit" value="Upload" /> <br>
       <br>
       <form class="container" action="update_post.php" method="post">

      <input type="text" name="title" placeholder="Enter your title" class="form-control" value="<?php echo $title ?>">
      <input type="hidden" name="post_id" value="<?php echo $post_id ?>">
       Write something...
      <textarea name="content" placeholder="Write something..." class="form-control" rows="8" cols="80"><?php echo $content ?></textarea>

     <input class="" type="submit" name="" value="Post">
   </form>

      </div>
      </div>
      </div>


</div>

  </body>
</html>
