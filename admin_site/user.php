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
     
<?php
if(isset($_POST["submit1"]))
{

$arr=import(",",$_POST["chk"]);
//include 'menu.php';
require 'userdb.php';
$obj=new database();
$res=$obj->deleteusers($arr);

header('location:user.php');
}
$conn=new mysqli("localhost","root","","Project");
if($conn->connect_error){
    echo "connection error";
}
//$_eml="";
$res=$conn->query("select * from User_tbl");

 // $_eml= $_SESSION["User_pk_emailid"];
//$_eml=$_SESSION["User_pk_emailid"];
?>
<table class="table">
<thead>
<th>Email_id</th>
<th>Name</th>
<th>Password</th>
<th>Address</th>
<th>Mobile_no</th>
<th>gender</th>
<th>Profile_pic</th>
</thead>
<?php

if($res->num_rows > 0){
    while($row=$res->fetch_assoc()){

    echo "<tr>";
     echo "<td>".$row["User_pk_emailid"]."</td>";
   
//'<input type="checkbox" name="chk[]" value="'.$row["User_pk_emailid"]'>';
    echo "<td>".$row["User_pk_emailid"]."</td>";
    echo "<td>".$row["User_Uname"]."</td>";
    echo "<td>".$row["User_password"]."</td>";
    echo "<td>".$row["User_Address"]."</td>";
    echo "<td>".$row["User_mobile_no"]."</td>";
     echo "<td>".$row["User_gender"]."</td>";
    echo "<td>";?><img src="<?php echo $row["User_profilepic"]; ?>"height="100" width="80"> <?php echo '</td>';
    echo "<td>";?> <input type="checkbox" name="chk[]" value="<?php echo $row["User_pk_emailid"];?>" /> <?php echo "</td>";
    echo "</tr>";
  
    }
}  

?>
<input type="submit" name= "submit1" value="delete">
</table>

</body>
</html>
