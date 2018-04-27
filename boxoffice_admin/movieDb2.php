<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Novus Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Tables :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<style>
.pagination{margin-top:30px;}
.pagination li{display:inline-block;margin:0 5px;}
.pagination li a{display:inline-block;padding:8px 12px;border:1px solid #eee;}
.pagination li a.active{font-weight:bold;background:#f5f5f5;}
</style>

<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						
						<li>
							<a href="theaterDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Theater<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="theater/theaterDb.php">Display Theater</a>
								</li>
                                <li>
									<a href="theater/addTheater.php">Add Theater</a>
								</li>
								
							</ul>
							<!-- /nav-second-level -->
						</li>
                        	<li>
							<a href="movieDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Movie<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
                            <li>
									<a href="movieDb.php">Display Movie</a>
								</li>
								<li>
									<a href="addMovie.php">Add Movie</a>
								</li>
								
							</ul>
							<!-- /nav-second-level -->
						</li>
                        	<li>
							<a href="show/showDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Show<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="show/showDb.php">Display Show</a>
								</li>
                                <li>
									<a href="show/showAdd.php">Add Show</a>
								</li>
								
							</ul>
							<!-- /nav-second-level -->
						</li>
                        <li>
							<a href="screenDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Screen<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
                                <li>
									<a href="screen/screenDb.php">Display Screen</a>
								</li>
								<li>
									<a href="screen/screenAdd.php">Add Screen</a>
								</li>
								
							</ul>
							<!-- /nav-second-level -->
						</li>
                                               <li>
							<a href="language/languageDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Language<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
                                 <li>
									<a href="language/languageDb.php">Display Language</a>
								</li>
								<li>
									<a href="language/languageAdd.php">Add Language</a>
								</li>
								
							</ul>
							<!-- /nav-second-level -->
						</li>
                        <li>
							<a href="book/bookDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Book<span class="fa arrow"></span></a>
						</li>
                        <li>
							<a href="payment/paymentDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Payment<span class="fa arrow"></span></a>
						</li>
                        <li>
							<a href="user/userDb.php"><i class="fa fa-cogs nav_icon"></i>Manage User<span class="fa arrow"></span></a>
						</li>
						
						<li>
							<a href="#"><i class="fa fa-file-text-o nav_icon"></i>Pages<span class="nav-badge-btm">02</span><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="login.html">Login</a>
								</li>
								<li>
									<a href="signup.html">SignUp</a>
								</li>
								<li>
									<a href="blank-page.html">Blank Page</a>
								</li>
							</ul>
							<!-- //nav-second-level -->
						</li>
						
					</ul>
					<div class="clearfix"> </div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
        	  <?php
        include 'shared/menu.php';

    ?>
		<!-- main content start-->
   	<div id="page-wrapper">
			<div class="main-page">
	<div align="right">	
  <button type="button" class="btn btn-primary">
  <a style="color:white" href="addMovie.php"><span>Add Movie</span></a>
  </button>
  
  <button type="button" class="btn btn-primary" onclick="window.print()">Print</button>
  </div>

				<div class="tables">
					
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
							<form action="moviedeleall.php" method="post">		
						<table class="table table-hover"> 
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
                                    <th>Operation</th>
                  
                             </tr> 
                         </thead> 
                         <tbody> 
            <?php
			
	if(isset($_GET['page']))
	{
		$page=$GET['page'];
	}
	else
	{
		$page=1;
	}
	if($page=='' || $page==1)
	{
		$page1=0;
	}
	else
	{
		$page1=($page*10)-10;
	}
	$sql="select m.*,l.* from movie_tbl m,language_tbl l where m.fk_Language_id=l.pk_Language_id ORDER BY ID ASC LIMIT '.$page1.',10";
	$connect= new mysqli('localhost','root','','boxoffice');
	$data=$connect->query($sql);
	
              while($row=$result->fetch_assoc())
              {
               echo '<tr>';
                echo '<td>'. $row["Movie_name"] .'</td>';
                  echo '<td>'. $row["Director"] .'</td>';
                  echo '<td>'?> <img src="<?php echo $row["Img_path"];?>" height="150" width="150"><?php echo '</td>';
                  echo '<td>'. $row["Producer"] .'</td>';
                  
                  echo '<td>'. $row["Cast"] .'</td>';
                   echo '<td>'. $row["Duration"] .'</td>';
                    echo '<td>'. $row["Story"] .'</td>';
                     echo '<td>'. $row["Type"] .'</td>';
                    //  echo '<td>'. $row["Type"] .'</td>';
                      
                      echo '<td>'. $row["Rating"] .'</td>';
                      echo '<td><input type="checkbox" name="chk[]" value="'.$row["pk_Movie_id"].'"></td>';
					     echo '<td>';?><a style="color:blue"<?php echo 'href="moviedelete.php?id='. $row["pk_Movie_id"].'"><span class="glyphicon glyphicon-trash"></span></a> | <a href="movieupdate.php?id='. $row["pk_Movie_id"].'"><span class="glyphicon glyphicon-pencil"></span></a></td>';
                   	 echo '<td> <p><a href="readmore.php?id='. $row["pk_Movie_id"] .'" class="btn btn-info" role="button" >Read More</a></p><td>';
			   echo '</tr>';
              }
			 ?>
                             </tbody> 
                             </table>
							  <input type="submit" name="btnall" class="btn btn-primary btn-lg" value="Delete All"></center>
							 </form>
					
							 
					</div>
					
				
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2016 Novus Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
</body>
</html>