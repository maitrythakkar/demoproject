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
        	  
        <!--include 'shared/menu.php';
		
//<html lang="en">


  //<body>-->
//<!-- header-starts -->
<html lang="en">


  
//<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="index.html">
						<h1>Boxoffice</h1>
						<span>AdminPanel</span>
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				<div class="search-box">
                
					<!--<form class="input">-->
                    <form  method="post"   id="searchform"> 
	      <!--<input  type="text" name="name" class="cls"> 
	      <input  type="submit" name="submit"   value="Search">
						-->
						<input   placeholder="Search by movie-name,producer,director namme"  name="name" type="text"class="cls" id="serchform" />
                        	      <input  type="submit" name="submit"   value="Search"></td>
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="10 10 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div><!--//end-search-box-->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new messages</h3>
									</div>
								</li>
								<li><a href="#">
								   <div class="user_img"><img src="images/1.png" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet</p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li class="odd"><a href="#">
									<div class="user_img"><img src="images/2.png" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								  <div class="clearfix"></div>	
								</a></li>
								<li><a href="#">
								   <div class="user_img"><img src="images/3.png" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all messages</a>
									</div> 
								</li>
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new notification</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="user_img"><img src="images/2.png" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet</p>
									<p><span>1 hour ago</span></p>
									</div>
								  <div class="clearfix"></div>	
								 </a></li>
								 <li class="odd"><a href="#">
									<div class="user_img"><img src="images/1.png" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								 <li><a href="#">
									<div class="user_img"><img src="images/3.png" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								 <li>
									<div class="notification_bottom">
										<a href="#">See all notifications</a>
									</div> 
								</li>
							</ul>
						</li>	
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">15</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 8 pending task</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Database update</span><span class="percentage">40%</span>
										<div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										<div class="bar yellow" style="width:40%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div class="bar green" style="width:90%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
										<div class="clearfix"></div>	
									</div>
								   <div class="progress progress-striped active">
										 <div class="bar red" style="width: 33%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div class="bar  blue" style="width: 80%;"></div>
									</div>
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all pending tasks</a>
									</div> 
								</li>
							</ul>
						</li>	
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/a.png" alt=""> </span> 
									<div class="user-name">
										<p>Wikolia</p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
								<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
    
    
	
    
		<!-- main content start-->
      <?php
        require 'admin_class.php';
        $obj=new movie_booking();
        $result=$obj->getAllMovie();
    ?>
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
                                    <!--<th>Duration</th>
                                    <th>Strory</th>
                                    <th>Type</th>
                                    <th>Language</th>
                                    <th>Rating</th>
                                    <th>Operation</th>
                  -->
                             </tr> 
                         </thead> 
                         <tbody> 
        
			            <?php
			
	 
	  if(isset($_POST['submit'])){ 
	 // if(isset($_GET['go'])){ 
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
  $name=$_POST['name']; 
	  //connect  to the database 
	  $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error()); 
  //-select  the database to use 
  $mydb=mysql_select_db("boxoffice"); 
 //-query  the database table 
	  $sql="SELECT  pk_Movie_id, Movie_name, Director,Img_path,Producer FROM movie_tbl WHERE Movie_name LIKE '%" . $name .  "%' OR Director LIKE '%" . $name ."%' OR Img_path LIKE '%" . $name ."%' OR Producer LIKE '%" . $name ."%'"; 
	  //-run  the query against the mysql query function 
	  $result1=mysql_query($sql); 
	  //-create  while loop and loop through result set 
	  while($row=mysql_fetch_array($result1)){ 
	          $FirstName  =$row['Movie_name']; 
	          $LastName=$row['Director']; 
			   $img_path=$row['Img_path'];
			   $producer=$row['Producer'];
			    
	          $ID=$row['pk_Movie_id']; 
	  //-display the result of the array 
	 echo' <table class="table table-hover">'; 
                        echo'<thead>';
                            echo'<tr>'; 
                                 
                                    // echo '<th>Movie name</th>';
                                    //echo '<th>Director</th>';
                                    //  <th>Image</th>
                                    // <th>Producer</th>
                        echo ' </tr> ';
                       echo '  </thead>'; 
						  echo '<tr>';
    //       echo "<td>"."<a  href=\"search.php?id=$ID\">"   .$FirstName . " </a></td>";
	//  echo "<ul>\n"; 
	echo  '<td><b>'  .$FirstName .'</b></td>'; 
	echo  '<td><b>'  .$LastName .'</b></td>'; 
	 echo '<td><b>'?> <img src="<?php echo $img_path?>" height="150" width="150"><?php echo '</b></td>';
	echo  '<td><b>'  .$producer .' </b></td>';
     echo '<td>';?><a style="color:blue"<?php echo 'href="moviedelete.php?id='. $row["pk_Movie_id"].'"><span class="glyphicon glyphicon-trash"></span></a> | <a href="movieupdate.php?id='. $row["pk_Movie_id"].'"><span class="glyphicon glyphicon-pencil"></span></a></td>';
	 echo '<td> <p><a href="readmore.php?id='. $row["pk_Movie_id"] .'" class="btn btn-info" role="button" >Read More</a></p><td>';
	//echo  '<td>'  .$img_path .'</td>';  
    
	
	
	  } 
	  } 
	  else{ 
	  echo  "<p>Please enter a search query</p>"; 
	  } 
	  } 
	  
	 
	 

              while($row=$result->fetch_assoc())
              {
               echo '<tr>';
			   
			 //  echo "<li>" "  .$FirstName . " " . $LastName .  "</a></li>\n"; 
                echo '<td>'. $row["Movie_name"] .'</td>';
                  echo '<td>'. $row["Director"] .'</td>';
                  echo '<td>'?> <img src="<?php echo $row["Img_path"];?>" height="150" width="150"><?php echo '</td>';
                  echo '<td>'. $row["Producer"] .'</td>';
                  
      //            echo '<td>'. $row["Cast"] .'</td>';
        //           echo '<td>'. $row["Duration"] .'</td>';
          ////          echo '<td>'. $row["Story"] .'</td>';
              //       echo '<td>'. $row["Type"] .'</td>';
                     // echo '<td>'. $row["Type"] .'</td>';
                      
                     // echo '<td>'. $row["Rating"] .'</td>';
                         echo '<td>';?><a style="color:blue"<?php echo 'href="moviedelete.php?id='. $row["pk_Movie_id"].'"><span class="glyphicon glyphicon-trash"></span></a> | <a href="movieupdate.php?id='. $row["pk_Movie_id"].'"><span class="glyphicon glyphicon-pencil"></span></a></td>';
				   echo '<td> <p><a href="readmore.php?id='. $row["pk_Movie_id"] .'" class="btn btn-info" role="button" >Read More</a></p><td>';
               echo '</tr>';
              }
            
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