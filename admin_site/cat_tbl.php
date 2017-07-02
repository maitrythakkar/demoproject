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

<?php
//include 'menu.php';
require 'catdb.php';
$obj=new database1();
$res=$obj->catgetdata();

?>
<div class="jumbotron" style="background-color:hotpink;color:black;">
  <div class="container">
    <h1>category table</h1>
  </div>
</div>
<table class="table">
<thead>
<th>Cat_id</th>
<th>Cat_name</th>
</thead>
<?php
if($res->num_rows > 0){
    while($row=$res->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row["Cat_pk_catid"]."</td>";
    echo "<td>".$row["Cat_name"]."</td>";
     echo '<td><a href="catdelete.php?id='. $row["Cat_pk_catid"].'"><span  class="glyphicon glyphicon-trash btn btn-danger">  <a href="catupdate.php?id='. $row["Cat_pk_catid"].'"><span  class="glyphicon glyphicon-edit btn btn-success"></span></td>';
     
   echo "</tr>";
    }
}
?>
</table>

</body>
</html>
