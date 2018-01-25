<?php
$conn=new mysqli("localhost","root","","boxoffice");
if($conn->connect_error)
{
    echo "connection failed";
}
 $_theater_name="";
      $_theater_add="";
      $_No_of_screen="";
	   $_pk_theater_id=$_POST["txttheatre_id"];
$_theater_name=$_POST["txttheatre_name"];
      $_theater_add=$_POST["txttheatre_add"];
      $_No_of_screen=$_POST["txtno_of_screen"];

$sql="update theater_tbl set theater_name='". $_theater_name  ."',theater_add='". $_theater_add  ."',No_of_screen='". $_No_of_screen  ."' where pk_theater_id=".$_pk_theater_id."' ";
//require '../admin_class.php';
  //    $obj=new movie_booking();
//$result=$obj->updatelanguage($_Language_name);



echo $sql;
 //echo $sql;
if($conn->query($sql)===true){
    
    header('location:theatreDb.php');
    //echo "update language_tbl set Language_name='". $_Language_name  ."' where pk_Language_id='".   $_pk_Language_id."' ";
}
else
{

    echo "unsccessfull";
}

?> 