<?php
session_start();

?>
<?php

$_pk_email_id=$_GET["txtpkemailid"];
$_User_name=$_GET["txtusername"];
	 $_Fname=$_GET["txtFname"];
	 $_Lname=$_GET["txtLname"];
	 $_gender=$_GET["txtgender"];
	 $_address=$_GET["txtadd"];
	 $_pincode=$_GET["txtpincode"];
	 $_mobile_no=$_GET["txtmobileno"];
	 $_Bdate=$_GET["txtbdate"];

$conn=new mysqli("localhost","root","","boxoffice");
 $sql="update customer_tbl set pk_email_id='". pk_email_id ."',User_name='". $_User_name ."',Fname='". $_Fname."',Lname='". $_Lname ."',Gender='". $_gender ."',Address='". $_address ."',Pincode='". $_pincode."',Mobile_no='". $_mobile_no ."',Bdate='". $_Bdate ."' where pk_email_id='". $_pk_email_id ."'";
 $result=$conn->query($sql);
if($result===TRUE)
{
    header('location:widgets.php');
}
else
{
    echo "unsuccesful";
}
?>
