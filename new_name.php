<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include 'bootstrap.php'; ?>
    <style media="screen">
      .container{
        background-color: #efe;
      }
    </style>
  </head>
  <body>

    <form class="container" action="change_name.php" method="post">
      <h3>Change username</h3>
      <input type="text" class="form-control" name="new_name" value=""><br>
      <input type="submit" class="form-control" name="submit" value="change">

    </form>
  </body>
</html>
