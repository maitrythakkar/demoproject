<?php
session_start();
?>

<?php
//include 'menu.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 $_old_img=$_GET["User_profilepic"];
 echo $_old_img;
$_eml=$_POST["txteml"];
$_name=$_POST["txtname"];
$_password=$_POST["txtpass"];

$_address=$_POST["txtadd"];
$_mobile=$_POST["txtmob"];
$_gender=$_POST["txtgender"];
$_img==basename($_FILES["txtimg"]["name"]);
if($_img=="")
{
    $_img=$_old_img;
    

}
else
{
    unlink($_old_img);
    move_uploaded_file($_FILES["txtimg"]["tmp_name"],"image/".$_img);
$_pimg="image/".$_pimg;

   // move_uploaded_file($_FILES["pimg"]["tmp_name"],"image/".$_pimg);
   // $_pimg="image/".$_pimg;
}


$conn=new mysqli("localhost","root","","Project");
$sql="update  User_tbl set User_pk_emailid='".$_eml."',  User_Uname='". $_name ."', User_password='". $_password ."',User_Address='". $_address ."',User_mobile_no='". $_mobile ."',User_gender='". $_gender ."' ,User_profilepic='". $_img ."' where User_pk_emailid='". $_eml ."'";

if($conn->query($sql)===true){
    header('location:user_viewprofile.php');
}
else
{

echo $sql;
    echo "unsccessfull";
}
}

?> 