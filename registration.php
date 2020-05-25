<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <!-- <style media="screen"> -->
  <!--
  /* <meta name="viewport",content="width=device-width,initial-scale=1"> */
/* .app{
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


  </style> */ -->
  <<?php
  include 'bootstrap.php' ?>
  <style media="screen">
    .container{
      background-color: #dedeed;
    }
  </style>

    <title>Registration</title>
  </head>
  <body>
<div class="container">


    <form class="" action="registration_handler.php" method="post">

        <h2><i>Registration</i></h2>
      Name: <input type="text" class="form-control" name="name" value=""><br>
      <br>
    Username:<input type="text" class="form-control"name="username" value=""><br>
    <br>
    DOB:<input type="date" class="form-control"name="dob" value=""><br>
    <br>

    <p>Select your Gender:</p><input type="radio" class="form-control"name='gender' value='male'> male
    <input type="radio" class="form-control"name='gender' value='female'>female


  <p>Select your Age:</p><select class="form-control" name="age">

    <option value="5">65+</option>
      <option value="4">50 - 64</option>
      <option value="3">35 - 49</option>
      <option value="2">18 - 34</option>
      <option value="1">Under 18</option>
    </select><br>
    <br>
    Email:<input type="email" class="form control" name="mail" value=""><br>
    <br>
    Password:<input type="password" class="form-control"name="pword" value=""><br>
    <br>

<input type="checkbox" class="form-control" name="check" value="">
  I agree with the <cite>terms & conditions.</cite><br>
<br>
      <input type="submit" class="form-control"name="" value="submit">


    </form>
    </div>

  </body>
</html>
