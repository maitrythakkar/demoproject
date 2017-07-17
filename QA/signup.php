<!DOCTYPE html>
<html lang="en">

<head>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


   
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
         <link rel="stylesheet" href="css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="css/leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="css/main.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
       
  


<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" ></script>


   
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

	<title>FAQ Template | CodyHouse</title>

</head>

<body>
    

    
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="Home.php">Home</a>
                    </li>
                    
                    <li>
                        <a href="Question.php">Question</a>
                    </li>
                    <li>
                        <a href="answer.php">Answer</a>
                    </li>
                    <li>
                        <a href="signup.php">Sign Up</a>
                    </li>
                    <li>
                       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Profile<span class="caret"></span></a>
          <ul class="dropdown-menu">
              
            <li><a href="login.php">Sign In</a></li>
            <li><a href="#">Sign Out</a></li>
            <li><a href="#">View Profile</a></li>
            
          </ul>
        </li>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    </br>
    </br>
    </br>
   		<!-- Login Php -->
 

        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="basic-login">
							<form role="form" role="form" method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
								<div class="form-group">
		        				 	<label for="login-username"><i class="icon-user"></i> <b>Email</b></label>
									<input class="form-control" name="txteml" id="login-username" type="text" placeholder="">
								</div>
                                <div class="form-group">
		        				 	<label for="login-username"><i class="icon-user"></i> <b>Username</b></label>
									<input class="form-control" name="txteml" id="login-username" type="text" placeholder="">
								</div>
                                <div class="form-group">
		        				 	<label for="login-username"><i class="icon-user"></i> <b>Mobilel</b></label>
									<input class="form-control" name="txteml" id="login-username" type="text" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="login-password"><i class="icon-lock"></i> <b>Password</b></label>
									<input class="form-control" name="txtpass" id="login-password" type="password" placeholder="">
								</div>
								<div class="form-group">
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
									
									<button type="submit" name="btnin" class="btn pull-right">Sign Up</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-sm-7 social-login">
						<p>Sign UP with your Facebook or Twitter</p>
						<div class="social-login-buttons">
							<a href="https://www.facebook.com/" class="btn-facebook-login">Sign UP with Facebook</a>
							<a href="https://twitter.com/" class="btn-twitter-login">Sign UP  with Twitter</a>
						</div>
						<div class="clearfix"></div>
						<div class="not-member">
							<p>Already have account? <a href="login.php">Login here</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</htm>