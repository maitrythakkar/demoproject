<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
   <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" ></script>

    </head>
    <body>
    
    <?php
include 'menu.php';
?>
    <form action="change_pass.php" method="post">
 <div class="container-fluid">
 <div class="jumbotron"><h1><center><font color="red">change password</font></center></h1>
 </div>
 <div class="container-fluid">
<center> <input class="form-control" type="password" name="oldpass" placeholder="Enter Your oldpassword"></center>
<br><br>
</div>
 <div class="container-fluid">
<center>
 <input class="form-control" type="password" name="newpass" placeholder="Enter Your new Password">
</center>
<br><br>
</div>
<div class="container-fluid">
<center>
 <input class="form-control" type="password" name="connewpass" placeholder="Enter Your new Password">
</center>
<br><br>
</div>
 
 </center>
 <div class="container-fluid">
 <center>
 <input class="btn btn-primary" type="submit" name="btn" value="  submit ">
<br><br>
 
 <center>


<?php
if(isset($_POST["btn"]))
{
 $eml=$_SESSION["eml"];

$_newpass=$_POST["newpass"];
$_oldpass=$_POST["oldpass"];
$_conpass=$_POST["connewpass"];


if($_newpass==$_conpass)
{
    
    require 'userchange.php';
    $obj=new database();
$res=$obj->change($_oldpass,$_newpass,$eml);

if($res===true)
{
    echo "successfull";
}
else
{
    echo $res;
}
}
else
{
    echo "unsuccessfull";
}
}

?>

</table>
</body>
</html>