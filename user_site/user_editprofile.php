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
<div class="jumbotron" style="background-color:hotpink;color:black;">
  <div class="container">
    <h1>Edit Profile</h1>
  </div>
</div>
    <?php
   // include 'menu.php';
    $conn=new mysqli("localhost","root","","Project");
    if($conn->connect_error)
    {
        echo "not connected";
    }
$_eml=$_SESSION["User_pk_emailid"];
$_name="";
$_password="";
$_mobile="";
$_address="";
$_img="";
$_gender="";



$sql="select * from User_tbl where User_pk_emailid='". $_eml ."'";
//echo $sql;
$result=$conn->query($sql);
$row=$result->fetch_assoc();

 $_eml=$row["User_pk_emailid"];
$_name=$row["User_Uname"];
$_password=$row["User_password"];
$_address=$row["User_Address"];
$_mobile=$row["User_mobile_no"];
$_img=$row["User_profilepic"];
//$target_dir="userimages/";
//$target_file=$target_dir.basename($_FILES["txtimg"]["name"]);

$_gender=$row["User_gender"];
?>
    <form method="post" enctype="multipart/form-data" action="user_editprofile1.php" class="form-group">
    <table class="table">
    
<tr><td>
 <b>Emailid: </td><td><input type="email" name="txteml"value="<?php echo $_eml; ?>"></td><tr>
  <tr><td><b> Name: </td><td><input type="text" name="txtname" value="<?php echo $_name; ?>"></td></tr>
  <tr><td> <b> Password:</td><td><input type="password" name="txtpass" value="<?php echo $_password; ?>"></td></tr>
  
   <tr><td><b> Address:</td><td><input type="text" name="txtadd" value="<?php echo $_address; ?>"></td></tr>
  <tr><td>  <b>Mobile</td><td><input type="number" name="txtmob" value="<?php echo $_mobile; ?>"></td></tr>
  
    <tr><td>  <b> Gender:</td><td> <input type="text" name="txtgender" value="<?php echo $_gender; ?>"></td></tr>
     <tr><td>  <b> Img:</td><td> <input type="file" name="txtimg" value="<?php echo $_img; ?>"></td></tr>
    <tr><td><input type="submit" name="btnadd" value="edit"></td></tr>
    </form>
    

 </table>
</body>
</html>