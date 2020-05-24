<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <style media="screen">
.app{
  background-color: #f1f1f1;
  background-attachment: scroll;
  text-align: center;
  color: #0000ff;

}


  </style>

    <title>Registration</title>
  </head>
  <body>

    <form class="app" action="registration_handler.php" method="post">
        Fill up the following information below:<br>
        <br>
        <h2>Registration</h2>
      Name:<input type="text" name="name" value=""><br>
    Username:<input type="text" name="username" value=""><br>
    <br>
    DOB:<input type="date" name="dob" value=""><br>
    <br>
    <p>Select your Gender:</p>
    <input type="radio" name='gender' value='male'> male
    <input type="radio" name='gender' value='female'>female
    <br>
    <select class="" name="age">
      Select your Age:
      <option value="5">65+</option>
      <option value="4">50 - 64</option>
      <option value="3">35 - 49</option>
      <option value="2">18 - 34</option>
      <option value="1">Under 18</option>
    </select>
    <br>
    Email:<input type="email" name="mail" value=""><br>
    <br>
    Password:<input type="password" name="pword" value=""><br>

<input type="checkbox" name="check" value="">
    Agree with terms & conditions

      <input type="submit" name="" value="submit">


    </form>
  </body>
</html>
