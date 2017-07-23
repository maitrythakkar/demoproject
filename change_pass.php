<?php
session_start();
if(isset($_POST["btn"]))
{
 $eml=$_SESSION["User_pk_emailid"];

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
