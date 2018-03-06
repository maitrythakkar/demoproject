
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
								<li>
									<a href="../theater/updateTheater.php">Update Theater</a>
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
								<li>
									<a href="../updateMovie.php">Update Movie</a>
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
								<li>
									<a href="../show/updateShow.php">Update Show</a>
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
									<a href="../screenAdd.php">Add Screen</a>
								</li>
								<li>
									<a href="../screenUpdate.php">Update Screen</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
                                               <li>
							<a href="languageDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Language<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
                                 <li>
									<a href="languageDb.php">Display Language</a>
								</li>
								<li>
									<a href="languageAdd.php">Add Language</a>
								</li>
								<li>
									<a href="language/languageUpdate.php">Update Language</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
                        <li>
							<a href="../bookDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Book<span class="fa arrow"></span></a>
						</li>
                        <li>
							<a href="../paymentDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Payment<span class="fa arrow"></span></a>
						</li>
                        <li>
							<a href="../userDb.php"><i class="fa fa-cogs nav_icon"></i>Manage User<span class="fa arrow"></span></a>
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
		  
        include '../shared/menu.php';

    ?>
	
		<!-- main content start-->
        <?php
        require '../admin_class.php';
        $obj=new movie_booking();
        $result=$obj->getAllLanguage();
    ?>

	<div id="page-wrapper">
			<div class="main-page">
	<div align="right">	
  <button type="button" class="btn btn-primary">
  <a style="color:white" href="languageAdd.php"><span>Add Language</span></a>
  </button>
  
  <button type="button" class="btn btn-primary" onclick="window.print()">Print</button>
  </div>		<div class="tables">
					
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
<<<<<<< HEAD
	<script type="text/javascript">
	function aa()
	{
		xmlhttp=new XMLHttpRequest();
		xmlhttp.open("Get","select.php?nm="+document.getElementById("serchname".value,false);
		xmlhttp.send(null);
		document.getElementById("d1").innerHTML=xmlhttp.responseText;
		document.getElementById("d1").style.visibility='visib';
	}
	</script>
	<form action="landeleteall.php" method="post">		
	


<input type="text" placeholder="serch" name="serchname" onKeyup="aa()"><br><br>

=======
	<form action="landeleteall.php" method="post">					
>>>>>>> 30c5717c65ba2d7ee3c5fc80f1ef922cdd4a90f0
						<table class="table table-hover"> 
                        <thead> 
                            <tr> 
                                
                 
                  <th>Language name</th>
                  <th>Operation</th>
                             </tr> 
                         </thead> 
                         <tbody> 
             <?php
              while($row=$result->fetch_assoc())
              {
               echo '<tr>';
               echo '<td><input type="checkbox" name="chk[]" value="'.$row["pk_Language_id"].'"></td>';
            
                  echo '<td>'. $row["Language_name"] .'</td>';
                  
                 
                         echo '<td><a href="languageDelete.php?id='. $row["pk_Language_id"].'"><span class="glyphicon glyphicon-trash"></span></a> | <a href="languageUpdate.php?id='. $row["pk_Language_id"].'"><span class="glyphicon glyphicon-pencil"></span></a></td>';
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
	<script src="../js/jquery.nicescroll.js"></script>
	<script src="../js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="../js/bootstrap.js"> </script>
</body>
</html>