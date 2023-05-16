<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Our Services</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./css/bootstrap.css" rel="stylesheet"> 
<link href="./css/style.css" rel="stylesheet">
</head>
	<body class="no-trans">
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="header-left">
							<div class="logo-section smooth-scroll">
								<div class="brand"><a href="index.php"><img src="images/logo.png" class="logoimg">FITNESS ZONE</a></div>						
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="header-right"> 
							<div class="main-navigation animated">
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li><a href="index.php">Home</a></li>
												<li><a href="services.php">Our Services</a></li>
												<li><a href="aboutus.php">About Us</a></li>
												<li class="active"><a href="contactus.php">Contact Us</a></li>
												<?php if(isset($_SESSION['loginID']) && $_SESSION['loginID'] != "") { ?>
												<li><a href="profile.php">My Profile</a></li>
												<li><a href="logout.php">Logout</a></li>
												<?php } else { ?>
												<li><a href="signup.php">Sign Up</a></li>
												<li><a href="login.php">Login</a></li>
												<?php } ?>
											</ul>
										</div>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div id="banner" class="banner">
			<div class="banner-image"></div>
			<div class="banner-caption">
				<div style="margin-top: 0px; opacity: 1;">
					<h1>Get FIT for LIFE Not for others</h1>
				</div>
			</div>
		</div>		
		<div class="footer">
				<div class="container">
					<div class="space"></div>
					<h1 class="title text-center space" id="contact">Contact Us</h1>
					<div class="space"></div>
					<div class="row">
						
						<div class="col-sm-6">
							<div class="footer-content">
								<form role="form" id="footer-form">
									<div class="form-group has-feedback">
										<label class="sr-only" for="name2">Name</label>
										<input type="text" class="form-control" id="name2" placeholder="Name" name="name2" required>
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="email2">Email address</label>
										<input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2" required>
										<i class="fa fa-envelope form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="message2">Message</label>
										<textarea class="form-control" rows="8" id="message2" placeholder="Message" name="message2" required></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<input type="submit" value="Send" class="btn btn-default">
								</form>
							</div>
						</div>
						
						<div class="col-sm-6">
							<div class="footer-content">
								

							<div class="widget-content">

								<p>Once You send message we will make a review on it to see if it's relative with the doctor's specification then we will redirect it to him if it's suitable, otherwise it will be discarded								</p><br/>

								<p class="contacts"><i class="fa fa-map-marker"></i> 3 Nagda Street, Banha, Qalyubia, Egypt. </p>

								<p class="contacts"><i class="fa fa-phone"></i> +201000000000 </p>

								<p class="contacts"><i class="fa fa-envelope"></i> support@abdotalaat.com</p>

							

							</div>

						</aside>
								<ul class="social-links">
									<li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="googleplus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li class="skype"><a target="_blank" href="#"><i class="fa fa-skype"></i></a></li>
									<li class="linkedin"><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
									<li class="youtube"><a target="_blank" href="#"><i class="fa fa-youtube"></i></a></li> 
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="space"></div>
		<footer id="footer">
			<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12"> 
							<p class="text-center">Copyright © 2023. FITNESS ZONE.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>