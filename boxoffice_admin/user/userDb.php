
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="../js/metisMenu.min.js"></script>
<script src="../js/custom.js"></script>
<link href="../css/custom.css" rel="stylesheet">
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
							<a href="../theater/theaterDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Theater<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="../theater/theaterDb.php">Display Theater</a>
								</li>
                                <li>
									<a href="../theater/addTheater.php">Add Theater</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
                        	<li>
							<a href="../movieDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Movie<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
                            <li>
									<a href="../movieDb.php">Display Movie</a>
								</li>
								<li>
									<a href="../addMovie.php">Add Movie</a>
								</li>
										</ul>
							<!-- /nav-second-level -->
						</li>
                        	<li>
							<a href="../show/showDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Show<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="../show/showDb.php">Display Show</a>
								</li>
                                <li>
									<a href="../show/showAdd.php">Add Show</a>
								</li>
								</ul>
							<!-- /nav-second-level -->
						</li>
                        <li>
							<a href="../screenDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Screen<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
                                <li>
									<a href="../screen/screenDb.php">Display Screen</a>
								</li>
								<li>
									<a href="../screeen/screenAdd.php">Add Screen</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
                                               <li>
							<a href="../language/languageDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Language<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
                                 <li>
									<a href="../language/languageDb.php">Display Language</a>
								</li>
								<li>
									<a href="../language/languageAdd.php">Add Language</a>
								</li>
														</ul>
							<!-- /nav-second-level -->
						</li>
                        <li>
							<a href="../book/bookDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Book<span class="fa arrow"></span></a>
						</li>
                        <li>
							<a href="../payment/paymentDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Payment<span class="fa arrow"></span></a>
						</li>
                        <li>
							<a href="../user/userDb.php"><i class="fa fa-cogs nav_icon"></i>Manage User<span class="fa arrow"></span></a>
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
<<<<<<< HEAD
        	  <?php
        include '../shared/menu2.php';
=======
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
						<input   placeholder="Search by user name"  name="name" type="text"class="cls" id="serchform" />
                        	      <input  type="submit" name="submit4"   value="Search"></td>
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
>>>>>>> 7ac854690535f91c8a15b0389abaca4de68d6069

		<!-- main content start-->
    
		<!-- main content start-->
         <?php
        require '../admin_class.php';
        $obj=new movie_booking();
        $result=$obj->getAlluser();
    ?>
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
					
						<table class="table table-hover"> 
                        <thead> 
                            <tr> 
  
                                    <th>Email_id</th>
                                    <th>User_name</th>
<<<<<<< HEAD
                                    <th>Password</th>
=======
                                   
>>>>>>> 7ac854690535f91c8a15b0389abaca4de68d6069
                                    <th>Fname</th>
                                    <th>Lname</th>
                                    <th>Address</th>
									<th>User_img</th>
                                    <!--<th>Pincode</th>
                                    <th>Mobile_no</th>
                                    <th>Bdate</th>
                                    
                                   <th> Password</th>
								    <th>Gender</th>-->
                             </tr> 
                         </thead> 
                         <tbody> 
<<<<<<< HEAD
                                 <?php
								
=======
                                  <?php
						 if(isset($_POST['submit4'])){ 
	 // if(isset($_GET['go'])){ 
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
  $name=$_POST['name']; 
	  //connect  to the database 
	  $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error()); 
  //-select  the database to use 
  $mydb=mysql_select_db("boxoffice"); 
 //-query  the database table 
	  $sql="SELECT pk_email_id,User_name,Address, Fname,Lname FROM customer_tbl WHERE User_name LIKE '%" . $name .  "%' OR Fname LIKE '%" . $name ."%' OR Lname LIKE '%" . $name ."%'  OR pk_email_id LIKE '%" . $name ."%' "; 
	  //-run  the query against the mysql query function 
	  $result1=mysql_query($sql); 
	  //-create  while loop and loop through result set 
	  while($row=mysql_fetch_array($result1)){ 
	          $User_name  =$row['User_name']; 
	          $Fname=$row['Fname']; 
			  $Lname=$row['Lname'];
			    $Address=$row['Address'];
	          $ID=$row['pk_email_id']; 
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
	echo  '<td><b>'  .$ID .'</b></td>'; 
	echo  '<td><b>'  .$User_name .'</b></td>'; 
	echo  '<td><b>'  .$Fname .'</b></td>'; 
	echo  '<td><b>'  .$Lname .'</b></td>'; 
		echo  '<td><b>'  .$Address .'</b></td>'; 
 echo '<td> <p><a href="readmoreuser.php?id='. $row["pk_email_id"] .'" class="btn btn-info" role="button" >Read More</a></p><td>';

     //echo '<td><a style="color:blue"<?php echo 'href="theaterdelete.php?id='. $row["pk_theater_id"].'"><span class="glyphicon glyphicon-trash"></span></a></td>';

	 
	//echo  '<td>'  .$img_path .'</td>';  
    
	
	
	  } 
	  } 
	  else{ 
	  echo  "<p>Please enter a search query</p>"; 
	  } 
	  } 
	  
	 
	 

      
                        
>>>>>>> 7ac854690535f91c8a15b0389abaca4de68d6069
              while($row=$result->fetch_assoc())
              {
                    echo '<tr>'; 
                    echo '<td>'. $row["pk_email_id"] .'</td>';
                     echo '<td>'. $row["User_name"] .'</td>';
                 
                    echo '<td>'. $row["Fname"] .'</td>'; 
                    echo '<td>'. $row["Lname"] .'</td>';
<<<<<<< HEAD
					$gen=$row["Gender"];
				
					if($gen==1)
					{
						echo '<td>'. "female" .'</td>';
					}
                    else
					{
						echo '<td>'. "male" .'</td>';	
					}
                    echo '<td>'. $row["Address"] .'</td>';
                    echo '<td>'. $row["Pincode"] .'</td>';
                    echo '<td>'. $row["Mobile_no"] .'</td>';
                    echo '<td>'. $row["Bdate"] .'</td>';
					  echo '<td>'?> <img src="<?php echo $row["User_img"];?>" height="150" width="150"><?php echo '</td>';
                   //  echo '<td>'. $row["User_img"] .'</td>';
=======
                 
                    echo '<td>'. $row["Address"] .'</td>';
                    // echo '<td>'. $row["Pincode"] .'</td>';
                    // echo '<td>'. $row["Mobile_no"] .'</td>';
                    // echo '<td>'. $row["Bdate"] .'</td>';
					//    echo '<td>'. $row["Gender"] .'</td>';
					//       echo '<td>'. $row["Password"] .'</td>';
                    //  echo '<td>'. $row["User_img"] .'</td>';
					  echo '<td> <p><a href="../readmoreuser.php?id='. $row["pk_email_id"] .'" class="btn btn-info" role="button" >Read More</a></p><td>';
>>>>>>> 7ac854690535f91c8a15b0389abaca4de68d6069
                   //      echo '<td><a href="deleteShow.php?id='. $row["pk_Show_id"].'"><span class="glyphicon glyphicon-trash"></span></a> | <a href="showUpdate.php?id='. $row["pk_Show_id"].'"><span class="glyphicon glyphicon-pencil"></span></a></td>';
               echo '</tr>';
              }
            ?>
                             </tbody> 
                             </table>
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
	<script src="../js/jquery.nicescroll.js"></script>
	<script src="../js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="../js/bootstrap.js"> </script>
</body>
</html>