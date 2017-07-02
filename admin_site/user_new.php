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
    <h1>View_profile</h1>
  </div>
</div>

    
    
<?php
if(isset($_POST["btn"]))
{
        if($result-> num_rows ==1)
    {
    $_SESSION["eml"]=$eml;
        header('location:change_pass.php');

    }

}
//include 'menu.php';
$conn=new mysqli("localhost","root","","Project");
if($conn->connect_error){
    echo "connection error";
}

$eml=$_SESSION["User_pk_emailid"];
$name="";
$password="";
$mobile="";
$address="";
$img="";
$gender="";

$sql="select * from User_tbl where user_pk_emailid='".$eml." ' ";
$result=$conn->query($sql);
?>
<table class="table">
<?php
if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
    
    
    echo "<tr>";
   
    echo "<td>".$row["User_pk_emailid"]."</td>";
     echo "<td>"."Name"."</td>";
    echo "<td>".$row["User_Uname"]."</td>";
    echo "<td>"."password"."</td>";
    echo "<td>".$row["User_password"]."</td>";
    echo "<td>"."Address"."</td>";
    echo "<td>".$row["User_Address"]."</td>";
    echo "<td>"."mobile"."</td>";
    echo "<td>".$row["User_mobile_no"]."</td>";
     echo "<td>"."Gender"."</td>";
     echo "<td>".$row["User_gender"]."</td>";
   
    echo "<td>";?><img src="<?php echo $row["User_profilepic"]; ?>"height="100" width="80"> <?php echo '</td>';
   // echo "<td>".$row["gender"]."</td>";
   
     echo '<h3>'.'<td><a href="user_editprofile.php"><span class= "glyphicon glyphicon- btn btn-success">Edit_profile</td>';
     //echo '<h3>'.'<td><a href="change_pass.php"><span class= "glyphicon glyphicon- btn btn-success"><h3>Change Password</td>';

      echo "</tr>";
    }
  
}

else
{


    echo "unsccessfull";
}


       
 
?>

</table>

</body>
</html>
