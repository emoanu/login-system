<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <!-- <style media="screen">
  /* <meta name="viewport",content="width=device-width,initial-scale=1"> */
.app{
  background-color: #bebebe;
  background-origin: content-box;
  background-attachment: scroll;

  text-align: center;
font-size: 20px;
display:block;
border-style: inset;

}
input{


  border-style:inset;
  background: #dedede;
  word-spacing: inherit;


}
h2{
  border: 2px solid;
color: #ffffff;

  padding: inherit;
  border-style:outset;

  background-color: #333333;
}


  </style> -->
    <title>Registration</title>
    <?php include 'bootstrap.php';?>
    <style media="screen">
      .form-control{
        border: 1px solid #00f;
      }
    </style>
  </head>
  <body>
<div class="container">

    <form class="form-group" action="registration_handler.php" method="post">

        <h2><i>Registration</i></h2>
      Name: <input class="form-control" class="form-control" type="text" class="btn" name="name" value=""><br>
      <br>
    Username:<input class="form-control" class="form-control" type="text" name="username" value=""><br>
    <br>
    DOB:<input class="form-control" type="date" name="dob" value=""><br>
    <br>

    <p>Select your Gender:</p><input class="form-control" type="radio" name='gender' value='male'> male
    <input class="form-control" type="radio" name='gender' value='female'>female


  <p>Select your Age:</p><select class="" name="age">

    <option value="5">65+</option>
      <option value="4">50 - 64</option>
      <option value="3">35 - 49</option>
      <option value="2">18 - 34</option>
      <option value="1">Under 18</option>
    </select><br>
    <br>
    Email:<input class="form-control" type="email" name="mail" value=""><br>
    <br>
    Password:<input class="form-control" type="password" name="pword" value=""><br>
    <br>

<input class="form-control" type="checkbox" name="check" value="">
  I agree with the <cite>terms & conditions.</cite><br>
<br>
      <input class="form-control" type="submit" name="" value="submit">


    </form>
    
  </div>
  </body>
</html>
