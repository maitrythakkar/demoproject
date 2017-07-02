<?php
session_start();
//$eml=$_SESSION["txteml"];
?>
<!DOCTYPE HTML>
<html>
<head>
<script src="js/jquery-3.2.0.js" ></script>


<link rel="stylesheet" href="css/bootstrap.min.css" />

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css" />

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" ></script>
</head>
 <?php
 //include 'menu.php';

if(isset($_POST["btnin"]))
{
    $eml=$_POST["txteml"];
    $password=$_POST["txtpass"];
    echo $_POST["txteml"];
    echo $_POST["txtpass"];
    $cnn=new mysqli("localhost","root","","Project");
   $sql="select * from User_tbl where User_pk_emailid= '". $eml ."' and User_password= '". $password ."' ";
echo $sql;
  echo $_SESSION["User_pk_emailid"];
    $result=$cnn->query($sql);
    if($result-> num_rows ==1)
    {
    $_SESSION["User_pk_emailid"]=$eml;
        header('location:user_viewprofile.php');

    }
   
}
?>
<body>
<div class="jumbotron" style="background-color:hotpink;color:black;">
  <div class="container">
    <h1>LOGIN</h1>
  </div>
</div>

<form action="user_login.php" method="post">
 <div class="container-fluid">
<center> <input class="form-control" type="text" name="txteml" placeholder="Enter Your Email"></center>
<br><br>
</div>
 <div class="container-fluid">
<center>
 <input class="form-control" type="password" name="txtpass" placeholder="Enter Your Password">
</center>
<br><br>
</div>
 </center>
 <div class="container-fluid">
 
  <center><input type ="submit" class="btn btn-success" name="btnin" value="LOGIN"></center></td></tr>
<br><br>
 
 <center>
<a href="forgetpass.php"><span class= "glyphicon glyphicon- btn btn-danger"><h3>Forget Password</h3></a><br><br>
 <br><a href="signup.php"><span class= "glyphicon glyphicon- btn btn-success">NEW ACCOUNT</a>
 
 </div>
 </div>
 </form>
 </body>
 </html>