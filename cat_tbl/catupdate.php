
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
    <body  >
    
<?php
//include 'menu.php';
$_cat_id="";
$cat_name="";
$_cat_id=$_GET["id"];
 require 'catdb.php';
$obj=new database1();
$res=$obj->getcat($_cat_id);
$row=$res->fetch_assoc();
$_cat_id=$row["Cat_pk_catid"];
$cat_name=$row["Cat_name"];
?>
<div class="jumbotron" style="background-color:hotpink;color:black;">
  <div class="container">
    <h1>category table update</h1>
  </div>
</div>
<form method="post" action="catupdate1.php" class="form-group">
   <center> category id:&nbsp&nbsp&nbsp&nbsp&nbsp<input tyep="text" name="txtcatid" value="<?php echo $_cat_id?>">
    <center> category name:<input tyep="text" name="txtcatname" value="<?php echo $cat_name?>"><br><br>
    <center><input type ="submit" class="btn btn-success" name="btnin" value="UPDATE"></center>
    
    </form>
</table>
</body>
</html>