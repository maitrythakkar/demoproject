<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/bootstrap.min.js"></script>
</head>
<body>


<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $_eml=$_POST["txteml"];

include 'menu.php';
require 'user_email.php';
$obj=new database();
$res=$obj->forgetpassword($_eml);

}
?>
<form method="post" action="sendemail.php">
<div class="jumbotron text-center"style="background-color:hotpink;color:black;" class="btn btn-primary">
  <h1>forget password</h1>
</div>
<div class="container">
<table class="table">
<div class="container-fluid">
<center> <input class="form-control" type="text" name="txteml" placeholder="Enter Your Email"></center>
<br><br>
<div class="container-fluid">
 
  <center><input type ="submit" class="btn btn-success" name="btnin" value="send mail"></center></td></tr>
<br><br>
 

             
   
</table>
</div>
</form>
</body>
</html>