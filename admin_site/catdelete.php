
<?php
include 'menu.php';
$id=$_GET["id"];
require 'catdb.php';
$obj=new database1();
$res=$obj->catdelete($id);

?>