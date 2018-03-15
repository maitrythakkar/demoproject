<?php
$_image=$_GET["img"];
$_pk=$_GET["txtpkemailid"];
$_User_name=$_GET["tx"];
	 $_Fname=$_GET["tx"];
	 $_Lname=$_GET["tx"];
	 $_gender=$_GET["tx"];
	 $_address=$_GET["tx"];
	 $_pincode=$_GET["tx"];
	 $_mobile_no=$_GET["tx"];
	 $_Bdate=$_GET["tx"];
	 
if($_img=="")
{
    $_img=$_image;
}
else
{   
    unlink($_image);
    move_uploaded_file($_FILES["txtimg"]["tmp_name"],"../images/".$_img);
    $_img="../images/".$_img;
}
$conn=new mysqli("localhost","root","","pro_question");
 $sql="update user_tbl set user_name='". $_name ."',user_pass='". $_pass ."',user_mob_no='". $_mob ."',user_img='". $_img ."' where pk_email_id='". $_email ."'";
 $result=$conn->query($sql);
if($result===TRUE)
{
    header('location:viewprofile.php');
}
else
{
    echo "unsuccesful";
}
?>
