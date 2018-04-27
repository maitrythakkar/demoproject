

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
								<li>
									<a href="theater/updateTheater.php">Update Theater</a>
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
								<li>
									<a href="updateMovie.php">Update Movie</a>
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
								<li>
									<a href="show/updateShow.php">Update Show</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
                        <li>
							<a href="screenDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Screen<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
                                <li>
									<a href="screenDb.php">Display Screen</a>
								</li>
								<li>
									<a href="screenAdd.php">Add Screen</a>
								</li>
								<li>
									<a href="screenUpdate.php">Update Screen</a>
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
								<li>
									<a href="language/language/languageUpdate.php">Update Language</a>
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
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="elements">
					<div class="col-md-6 weather-grids widget-shadow">
						<div class="header-top">
							<figure class="icons">
								<canvas id="clear-day" width="64" height="64"></canvas>
							</figure>
							<h2>Weather</h2>
							<ul>
								<li><p>°C</p></li>
								<li><p class="cen">°F</p></li>
							</ul>
							<div class="clearfix"> </div>
						</div>
						<div class="header-bottom">
							<div class="header-bottom1">
								<div class="header-head">
									<h4>Sunny</h4>
									<figure class="icons">
										<canvas id="partly-cloudy-day" width="64" height="64"></canvas>
									</figure>	
									<h6>20°</h6>
									<div class="bottom-head">
										<p>Monday</p>
									</div>
								</div>
							</div>
							<div class="header-bottom1 header-bottom2">
								<div class="header-head">
									<h4>Cloudy</h4>
									<figure class="icons">
										<canvas id="cloudy" width="64" height="64"></canvas>
									</figure>
									<h6>37°</h6>
									<div class="bottom-head">
										<p>Tuesday</p>
									</div>
								</div>
							</div>
							<div class="header-bottom1">
								<div class="header-head">
									<h4>Rainy</h4>
									<figure class="icons">
										<canvas id="rain" width="64" height="64"></canvas>
									</figure>
									<h6>18°</h6>
									<div class="bottom-head">
										<p>Wednesday</p>
									</div>
								</div>
							</div>
							<div class="header-bottom1 header-bottom2">
								<div class="header-head">
									<h4>Snowy</h4>
									<figure class="icons">
										<canvas id="snow" width="64" height="64"></canvas>
									</figure>
									<h6>-2°</h6>
									<div class="bottom-head">
										<p>Thursday</p>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<script>
							 var icons = new Skycons({"color": "#fff"}),
								  list  = [
									"clear-day"
								  ],
								  i;

							  for(i = list.length; i--; )
								icons.set(list[i], list[i]);

							  icons.play();
						</script>
						<script>
							 var icons = new Skycons({"color": "#E94E02"}),
								  list  = [
									"clear-night", "partly-cloudy-day",
									"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
									"fog"
								  ],
								  i;

							  for(i = list.length; i--; )
								icons.set(list[i], list[i]);

							  icons.play();
						</script>
					</div>
					<div class="col-md-6 weather-grids weather-right widget-shadow">
						<div class="header-top">
							<h3>Member Stats </h3>
						</div>
						<div class="circle-charts">
							<ul>
								<li><div class="demo-1" data-percent="65"></div><p>Active</p></li>
								<li><div class="demo-2" data-percent="55"></div><p>Inactive</p> </li>
								<li><div class="demo-3" data-percent="85"></div><p>Sleeping</p> </li>
							</ul>
						</div>
						<script>
							$('.demo-1').percentcircle();
								$('.demo-2').percentcircle({
								animate : true,
								diameter : 100,
								guage: 3,
								coverBg: '#fff',
								bgColor: '#efefef',
								fillColor: '#e94e02',
								percentSize: '15px',
								percentWeight: 'normal'
								});

								$('.demo-3').percentcircle({
								animate : true,
								diameter : 100,
								guage: 3,
								coverBg: '#fff',
								bgColor: '#efefef',
								fillColor: '#F2B33F',
								percentSize: '15px',
								percentWeight: 'normal'
							});
						</script>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="elements  row">
					<div class="col-md-4 profile widget-shadow">
						<h4 class="title3">Profile</h4>
						<div class="profile-top">
							<img src="images/img1.png" alt="">
							<h4>Wikolia smith</h4>
							<h5>Lorem Ipsum is simply dummy</h5>
						</div>
						<div class="profile-text">
							<div class="profile-row">
								<div class="profile-left">
									<i class="fa fa-envelope profile-icon"></i>
								</div>
								<div class="profile-right">
									<h4>Username@example.com </h4>
									<p>Email</p>
								</div> 
								<div class="clearfix"> </div>	
							</div>
							<div class="profile-row row-middle">
								<div class="profile-left">
									<i class="fa fa-mobile profile-icon"></i>
								</div>
								<div class="profile-right">
									<h4>222-555-111</h4>
									<p>Contact Number</p>
								</div> 
								<div class="clearfix"> </div>	
							</div>
							<div class="profile-row">
								<div class="profile-left">
									<i class="fa fa-facebook profile-icon"></i>
								</div>
								<div class="profile-right">
									<h4>facebook.com/user</h4>
									<p>Facebook</p>
								</div> 
								<div class="clearfix"> </div>	
							</div>
						</div>
						<div class="profile-btm">
							<ul>
								<li>
									<h4>420</h4>
									<h5>Following</h5>
								</li>
								<li>
									<h4>100</h4>
									<h5>Likes</h5>
								</li>
								<li>
									<h4>60</h4>
									<h5>Shares</h5>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 profile widget-shadow chat-mdl-grid">
						<h4 class="title3">Chat</h4>
						<div class="scrollbar scrollbar1">
							<div class="activity-row activity-row1 activity-right">
								<div class="col-xs-3 activity-img"><img src="images/1.png" class="img-responsive" alt=""></div>
								<div class="col-xs-9 activity-img1">
									<div class="activity-desc-sub">
										<p>Hello ! Lorem ipsum dolor sit</p>
										<span>10:00 PM</span>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="activity-row activity-row1 activity-left">
								<div class="col-xs-9 activity-img2">
									<div class="activity-desc-sub1">
										<p>What about our next meeting?</p>
										<span class="right">9:55 PM</span>
									</div>
								</div>
								<div class="col-xs-3 activity-img"><img src="images/3.png" class="img-responsive" alt=""></div>
								<div class="clearfix"> </div>
							</div>
							<div class="activity-row activity-row1 activity-right">
								<div class="col-xs-3 activity-img"><img src="images/1.png" class="img-responsive" alt=""></div>
								<div class="col-xs-9 activity-img1">
									<div class="activity-desc-sub">
										<p>Consectetur adipisicing elit. Atque ea mollitia pariatur porro quae se</p>
										<span>9:52 PM</span>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="activity-row activity-row1 activity-left">
								<div class="col-xs-9 activity-img2">
									<div class="activity-desc-sub1">
										<p>Quae sed sequi sint tenetur Atque ea mollitia pariatu </p>
										<span class="right">8:00 PM</span>
									</div>
								</div>
								<div class="col-xs-3 activity-img"><img src="images/3.png" class="img-responsive" alt=""></div>
								<div class="clearfix"> </div>
							</div>
							<div class="activity-row activity-row1 activity-left">
								<div class="col-xs-9 activity-img2">
									<div class="activity-desc-sub1">
										<p>Quae sed sequi sint tenetur Atque ea mollitia pariatu </p>
										<span class="right">7:00 PM</span>
									</div>
								</div>
								<div class="col-xs-3 activity-img"><img src="images/2.png" class="img-responsive" alt=""></div>
								<div class="clearfix"> </div>
							</div>
							<div class="activity-row activity-row1 activity-right">
								<div class="col-xs-3 activity-img"><img src="images/1.png" class="img-responsive" alt=""></div>
								<div class="col-xs-9 activity-img1">
									<div class="activity-desc-sub">
										<p>Consectetur adipisicing elit. Atque ea mollitia pariatur porro quae se</p>
										<span>6:52 PM</span>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="chat-bottom">
							<form>
								<input type="text" placeholder="Reply" required="">
							</form>
						</div>
					</div>
					<div class="col-md-4 profile widget-shadow">
						<div class="activity_box activity_box2">
							<h4 class="title3">Todo</h4>
							<div class="scrollbar scrollbar1">
								<div class="single-bottom">
									<ul>
										<li>
											<input type="checkbox" id="brand" value="">
											<label for="brand"><span></span> Sunt in culpa qui officia.</label>
										</li>
										<li>
											<input type="checkbox" id="brand1" value="">
											<label for="brand1"><span></span> Fugiat quo voluptas nulla.</label>
										</li>
										<li>
											<input type="checkbox" id="brand2" value="">
											<label for="brand2"><span></span> Dolorem eum.</label>
										</li>
										<li>
											<input type="checkbox" id="brand3" value="">
											<label for="brand3"><span></span> Pain that produces no resultant.</label>
										</li>
										<li>
											<input type="checkbox" id="brand4" value="">
											<label for="brand4"><span></span> Cupidatat non proident.</label>
										</li>
										<li>
											<input type="checkbox" id="brand5" value="">
											<label for="brand5"><span></span> Praising pain was born.</label>
										</li>
										<li>
											<input type="checkbox" id="brand6" value="">
											<label for="brand6"><span></span> Computer &amp; Electronics</label>
										</li>
										<li>
											<input type="checkbox" id="brand7" value="">
											<label for="brand7"><span></span> Dolorem ipsum quia.</label>
										</li>
										<li>
											<input type="checkbox" id="brand8" value="">
											<label for="brand8"><span></span> Consequatur aut perferendis.</label>
										</li>
										<li>
											<input type="checkbox" id="brand9" value="">
											<label for="brand9"><span></span> Dolorem ipsum quia.</label>
										</li>
										<li>
											<input type="checkbox" id="brand10" value="">
											<label for="brand10"><span></span> Sunt in culpa qui officia.</label>
										</li>
										<li>
											<input type="checkbox" id="brand11" value="">
											<label for="brand11"><span></span> Fugiat quo voluptas nulla.</label>
										</li>
										<li>
											<input type="checkbox" id="brand12" value="">
											<label for="brand12"><span></span> Dolorem eum.</label>
										</li>
									</ul>
								</div>
							</div>
							<div class="chat-bottom">
								<form>
									<input type="text" placeholder="What next ?" required="">
								</form>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>	
				</div>
				<div class="widget_1 row elements">
					<div class="col-sm-4 widget_1_box widget-shadow">
						<div class="tile-progress bg-info">
							<div class="content">
								<h4><i class="fa fa-dashboard icon-sm"></i> Server Load</h4>
								<div class="progress progress-striped active">
									 <div class="bar  blue" style="width: 80%;"></div>
								</div>
								<span>40% increase</span>
							</div>
						</div>
					</div>
					<div class="col-sm-4 widget_1_box widget-mdl-grid widget-shadow">
						<div class="tile-progress bg-success">
							<div class="content">
								<h4><i class="fa fa-dashboard icon-sm"></i> Server Load</h4>
								<div class="progress progress-striped active">
									 <div class="bar yellow" style="width: 80%;"></div>
								</div>
								<span>40% increase</span>
							</div>
						</div>
					</div>
					<div class="col-sm-4 widget_1_box widget-shadow">
					   <div class="tile-progress bg-danger">
							<div class="content">
								<h4><i class="fa fa-dashboard icon-sm"></i> Server Load</h4>
								<div class="progress progress-striped active">
									 <div class="bar orange" style="width: 80%;"></div>
								</div>
								<span>40% increase</span>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
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