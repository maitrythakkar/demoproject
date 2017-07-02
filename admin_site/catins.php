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
<?php
//include 'menu.php';
?>
</head>
    <div class="jumbotron" style="background-color:hotpink;color:black;">
  <div class="container">
    <h1>category TABLE INSERT</h1>
  </div>
</div>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<table class="table">

<tr><td>cat id:<td><input type="text" class="form-control" name="txtcatid"></tr><br>
<tr><td>cat Name:<td><input type="text" class="form-control" name="txtcatname"></tr><br>
</table>
<tr><center><input type ="submit" class="btn btn-success" name="btnin" value="Insert"></center>
</form>

<?php
//include 'menu.php';
$_cat_id="";
$cat_name="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $_cat_id=$_POST["txtcatid"];
    $cat_name=$_POST["txtcatname"];
  require 'cat_tbl.php';
$obj=new database1();
$res=$obj->catinsert($_cat_id,$cat_name);

}
?>
</body>
</html>