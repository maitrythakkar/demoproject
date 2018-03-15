<?php
session_start();

$_pk_email_id=$_SESSION["pk_email_id"];
$_Password=$_SESSION["Pass"];
?>

<?php
$_pk_email_id="";
$_Password="";
$_pk_email_id=$_POST["pk_email_id"];
$_Password=$_POST["Pass"];
if($_pk_email_id=="")
{
    echo '<script>';
    echo 'alert("Enter mail Id First")';
    echo '</script>';
}
elseif ($_Password=="") {
    echo '<script>';
    echo 'alert("Enter Passord First")';
    echo '</script>';
    
}
else
{
    $cnn=new mysqli("localhost","root","","boxoffice");
   $sql="select * from customer_tbl where pk_email_id= '". $_pk_email_id ."' and Password= '". $_Password ."'  and type=0 ";
echo $sql;
  echo $_SESSION["$_pk_email_id"];
    $result=$cnn->query($sql);
    if($result-> num_rows===1)
    {
		 $row=$result->fetch_assoc();
		 if($row["type"]==="1" )
		 {
			 
        echo"you are not an authorized admin";
		 }
		 else
		 {
			 
   
    $_SESSION["pk_email_id"]=$_pk_email_id;
      header('location:movieDb.php');
   
     } 
   
}
else
{   

    echo '<script>';
    echo 'alert("incorrect Password Or Mail_ID")';
    echo '</script>';
}



}
?>