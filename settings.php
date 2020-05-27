<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include 'bootstrap.php' ?>
  </head>
  <body>


<form class="container" action="change_password.php" method="post">
    <h2>Change password</h2>
  Enter your new password:
  <input type="password" class=form-control name="new_password" value="">
  Enter your old password:
  <input type="password" class=form-control name="old_password" value=""><br>
  <input type="submit" class="form-control"name="submit" value="change password">
</form>



  </body>
</html>
