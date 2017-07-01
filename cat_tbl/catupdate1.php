<?php
include 'menu.php';

$_cat_id=$_POST["txtcatid"];
echo $_cat_id;

$cat_name=$_POST["txtcatname"];
echo $cat_name;
require 'catdb.php';
$obj=new database1();
$res=$obj->catupdate($cat_name,$_cat_id);
if($res===true)
{
 header('location:cat_tbl.php');
   echo "success";
}
else
{
    
    echo "un";
}

?>
