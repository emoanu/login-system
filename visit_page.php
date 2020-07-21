<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include 'bootstrap.php'; ?>
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
    <!-- nav nav-pills nav-stacked -->
    <nav class="navbar navbar-expand-sm bg-light navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item active" >
           <a href="index.php">Home</a>
         </li>

        <li class="nav-item">
          <a href="#">Profile</a>
        </li>

        <li class="nav-item">
        <a href="#">Notification</a>
        </li>
        <li class="nav-item">
        <a href="settings.php">Settings</a>
      </li>
        </ul>
    </nav>

      <br>
      <input type="search" name="search" /> <input type="submit" value="Search" /> <br>
      <br>
      <input type="file"  name="file" enctype="multipart/form-data" /><br />
       <input type="submit" name="submit" value="Upload" /> <br>
       <br>
       <form class="container" action="uploads.php" method="post">

      <input type="text" name="title" placeholder="Enter your title" class="form-control" value="">
       Write something...
      <textarea name="content" placeholder="Write something..." class="form-control" rows="8" cols="80"></textarea>

     <input class="" type="submit" name="" value="Post">
   </form>

      </div>
      </div>
      </div>


</div>

  </body>
</html>
