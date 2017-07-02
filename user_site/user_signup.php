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
    <?php
//include 'menu1.php';
?>
<body>
<div class="jumbotron" style="background-color:hotpink;color:black;">
  <div class="container">
    <h1>SIGN_UP</h1>
  </div>
</div>
    <form method="post"  enctype="multipart/form-data" action="user_vrfy.php" class="form-group">
    <table class="table">
   
<tr><td>
    <b>
   Emailid: </td><td><input type="email" name="txteml"></td><tr>
  <tr><td><b> Name: </td><td><input type="text" name="txtname"></td></tr>
  <tr><td> <b> Password:</td><td><input type="password" name="txtpass"></td></tr>
 
   <tr><td><b> Address:</td><td><input type="text" name="txtadd"></td></tr>
    <tr><td> <b> Mobile</td><td><input type="number" name="txtmob"></td></tr>
    <tr><td> <b> Gender:</td><td><input type="radio" name="txtgender" value="male" >male
     <input type="radio" name="txtgender" value="female" >female</td></tr>
 
   <tr><td>  <b> Img:</td><td> <input type="file" name="txtimg"></td></tr>
   
    <tr><td> <center><input type ="submit" class="btn btn-success" name="btnin" value="SIGNUP"></center></td></tr>
    
    </form>
<?php
//include 'menu.php';
$_eml="";
$_name="";
$_password="";
$_mobile="";
$_address="";
$_img="";
$_gender="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{

$_eml=$_POST["txteml"];
$_name=$_POST["txtname"];
$_password=$_POST["txtpass"];
$_mobile=$_POST["txtmob"];
$_address=$_POST["txtadd"];
//$_img=$_POST["txtimg"];

$target_dir="userimages/";
$target_file=$target_dir.basename($_FILES["txtimg"]["name"]);
//echo $target_file;
$_gender=$_POST["txtgender"];
//echo $_gender;
$random_alpha=md5(rand());
$token=substr($random_alpha,0,6);
//echo $token;
if(move_uploaded_file($_FILES["txtimg"]["tmp_name"],$target_file))
{
    $conn=new mysqli("localhost","root","","Project");
if($conn->connect_error)
{
    echo "connection failed";
}
$sql="insert into user_tbl values('".$_eml."','".$_name."','".$_password."','".$_address."','".$_mobile."','".$_gender."','".$target_file."',,'no','".$token."') ";
echo $sql;

   // require 'userdb.php';
    //$obj=new database();
    //$res=$obj->userdelete($_eml);
    if($conn->query($sql)===true)
    {
         header('location:login.php');
        echo "successfully";

    }
    else
    {
       echo "<h3>"." unsuccessfull sign_up"."<h3>";
    }
}
/*$conn=new mysqli("localhost","root","","database1");
if($conn->connect_error)
{
    echo "connection failed";
}
$sql="insert into user values('".$_eml."','".$_name."','".$_password."','".$_mobile."','".$_address."','".$target_file."','".$_gender."','no','".$token."') ";
echo $sql;*/

/*if($conn->query($sql)===true){
    echo "successfull";
}
else
{
   echo $sql;
    echo "unsccessfull";
}*/


}
?>

</table>
</body>
</html>