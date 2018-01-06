<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>
	
	 
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css" >
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js" ></script>
	
    <!-- Bootstrap core CSS -->
   <!-- <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

    <link href="dashboard/dashboard.css" rel="stylesheet">

   
    <!--<script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <?php
        include 'shared/menu.php';

    ?>
    <?php
        require 'admin_class.php';
        $obj=new movie_booking();
        $result=$obj->getAllMovie();
    ?>
  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="moviedb.php">Manage Movie<span class="sr-only">(current)</span></a></li>
            <li><a href="screenDb.php">Manage Screen</a></li>
            
            <li><a href="user/userDb.php">Manage User</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="theater/theaterDb.php">Manage Theater</a></li>
            <li><a href="show/showDb.php">Manage Show</a></li>
            <li><a href="language/languageDb.php">Manage Language</a></li>
            <li><a href="payment/paymentDb.php">Manage Payment</a></li>
            <li><a href="book/bookDb.php">Manage book</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            
            
          </div>

                   <h1 align="right" data-toggle="tooltip"  data-placement="right" title="Please click here for Insert Data "> <a href="movieAdd.php"><span class="glyphicon glyphicon-plus"></span></a></h1>
</br>
</br>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  
                  <th>Movie name</th>
                  <th>Director</th>
                  <th>Image</th>
                  <th>Producer</th>
                  <th>Cast</th>
                  <th>Duration</th>
                  <th>Strory</th>
                  <th>Type</th>
                  <th>Language</th>
                  <th>Rating</th>
                  
                </tr>
              </thead>
              <tbody>
                  <?php
              while($row=$result->fetch_assoc())
              {
               echo '<tr>';
                echo '<td>'. $row["Movie_name"] .'</td>';
                  echo '<td>'. $row["Director"] .'</td>';
                  echo '<td>'.'<img src="">'.'</td>';
                  echo '<td>'. $row["Producer"] .'</td>';
                  
                  echo '<td>'. $row["Cast"] .'</td>';
                   echo '<td>'. $row["Duration"] .'</td>';
                    echo '<td>'. $row["Story"] .'</td>';
                     echo '<td>'. $row["Type"] .'</td>';
                      echo '<td>'. $row["Type"] .'</td>';
                      
                      echo '<td>'. $row["Rating"] .'</td>';
                         echo '<td><h6 data-toggle="tooltip"  data-placement="right" title="Please click here for Delete Record "><a href="moviedelete.php?id='. $row["pk_Movie_id"].'"><span class="glyphicon glyphicon-trash"></span></a></h6><h6  data-toggle="tooltip"  data-placement="right" title="Please click here for Update Record ">|<a href="movieupdate.php?id='. $row["pk_Movie_id"].'"><span class="glyphicon glyphicon-pencil"></span></a></h5></td>';
               echo '</tr>';
              }
            ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>