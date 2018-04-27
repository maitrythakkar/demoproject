<?php
session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
<style>
.r1
{
	
	
   
    width: 140%;
}
.divcls
{
	
	padding:2%;
	 height: 10%;
    width: 85%;
}
</style>
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
									<a href="screenAdd.php">Add Screen</a>
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
			<div  id="page-wrapper" class="r1">
			<div class="main-page divcls">
	
		<!--left-fixed -navigation-->
        	  <?php
        include 'shared/menu.php';
		echo "hiii";
		$_pk_email_id=$_SESSION["pk_email_id"];
		//echo $_pk_email_id;
        $con=new mysqli("localhost","root","","boxoffice");
        if($con->connect_error)
        {
            echo "something went wrong";
        }
		 // $_pk_email_id=$_GET["id"];
		//  echo $_pk_email_id;
		  
		  
	 $_User_name="";
	 $_Fname="";
	 $_Lname="";
	 $_gender="";
	 $_address="";
	 $_pincode="";
	 $_mobile_no="";
	 $_Bdate="";
	 $sql="select * from customer_tbl where pk_email_id='". $_pk_email_id."'";;
	 //echo $sql;
		
		$result=$con->query($sql);
		//echo $result;
		$row=$result->fetch_assoc();
	 $_User_name=$row["User_name"];
	 $_Fname=$row["Fname"];
	 $_Lname=$row["Lname"];
	 $_gender=$row["Gender"];
	 if($_gender==1)
	 {
			$_gender1="female";
			
	 }
	 else
	 {
		 $_gender1="male";
	 }
	 $_address=$row["Address"];
	 $_pincode=$row["Pincode"];
	 $_mobile_no=$row["Mobile_no"];
	 $_Bdate=$row["Bdate"];
   echo $_User_name;
                          
?>                        
		<!-- //header-ends -->
		<!-- main content start-->
		                  
		<div  id="page-wrapper" class="r1">
			<div class="main-page divcls">
			              
				          
						<?php
                          
$_pk_email_id=$_SESSION["pk_email_id"];
$conn=new mysqli("localhost","root","","boxoffice");
    $sql="select * from customer_tbl where pk_email_id='". $_pk_email_id ."'";
    $result=$conn->query($sql);
                          
                          
						  
		while($row=$result->fetch_assoc())
		{                 
                          
echo '<div class="r1">';  
 echo '	<div class="elements  row r1">';
 echo '<div class="col-md-4 profile widget-shadow divcls">';
					echo '	<h4 class="title3">'.'Profile'.'</h4>';
					echo '	<div class="profile-top">';
					      
    echo '<div class="span3" >';
   echo '<center><img src="'.$row["User_img"].'" style="height:150px;width:150px;" class="img-thumbnail"></center><br><br><br>';
    echo '</div>';        
    							
							echo '<h4> '.$row["User_name"].'</h4><br>';
						 echo '<h5> '.$row["Fname"]." ".$row["Lname"].'</h5><br>';
   echo ' </div>';        
                          
			              
						  
						} 
						?>
						<form action="editprofile1.php" method="post">
						

			<div class="main-page">
	<form role="form" method="post" action="editprofile1.php">
								<div class="form-group">
								
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Email ID </b></label>
									<input class="form-control" id="register-username"  type="text" name="txtpkemailid"  value="<?php echo $_pk_email_id; ?>">
								</div>
                <div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b> Movie Name</b></label>
									<input class="form-control" id="register-username"  type="text" name="txtusername"  value="<?php echo $_User_name; ?>">
								</div>
								
								<div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b> First Name</b></label>
									<input class="form-control" id="register-password2" type="text" name="txtFname"  value="<?php echo $_Fname; ?>">
								</div>
                	<div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b> Last Name </b></label>
									<input class="form-control" id="register-password2" type="text" name="txtLname"  value="<?php echo $_Lname; ?>">
								</div>
                <div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b> Gender </b></label>
									<input class="form-control" id="register-password2" type="radio" name="txtgender"  <?php if ($_gender1=="female") echo "checked";?>
value="female">female
								<input class="form-control" id="register-password2" type="radio" name="txtgender"  <?php if ($_gender1=="male") echo "checked";?>
value="male">male
								

								</div>
                <div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b> Address</b></label>
									<input class="form-control" id="register-password2" type="text" name="txtadd" value="<?php echo $_address; ?>">
								</div>
                <div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b> Pincode</b></label>
									<input class="form-control" id="register-password2" type="text" name="txtpincode" value="<?php echo $_pincode; ?>">
								</div>
                <div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b> Mobile_no</b></label>
									<input class="form-control" id="register-password2" type="text" name="txtmobileno"  value="<?php echo $_mobile_no; ?>">
                </div>
                <div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b> Birth Date</b></label>
									<input class="form-control" id="register-username"  type="text" name="txtbdate"  value="<?php echo $_Bdate; ?>">
								</div>
                <center>
								<div class="form-group">
									<button type="submit" name="btninsert" value="Edit" class="btn pull-right">Edit</button>
									<div class="clearfix"></div>
								</div>
							</form>
		
				
	
			
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