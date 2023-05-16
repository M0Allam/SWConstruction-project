<?php
include_once("configure.php");
if(isset($_POST['Signup']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$emailSql = mysqli_query($con, "SELECT * from users WHERE email = '".$email."'");
	$emailCount = mysqli_num_rows($emailSql);
	if($emailCount > 0)
		$_SESSION['emailexists'] = "Email Address already exists. Please try with another Email Address";
	else
	{
		mysqli_query($con, "INSERT into users SET name = '".$name."', email = '".$email."', password = '".$password."', phone = '".$phone."', address = '".$address."', city = '".$city."', state = '".$state."', country = '".$country."'");
		$_SESSION['signupsuccess'] = "Sign Up Successfully Completed";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Sign Up</title>
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
												<li><a href="contactus.php">Contact Us</a></li>
												<?php if(isset($_SESSION['loginID']) && $_SESSION['loginID'] != "") { ?>
												<li><a href="profile.php">My Profile</a></li>
												<li><a href="logout.php">Logout</a></li>
												<?php } else { ?>
												<li class="active"><a href="signup.php">Sign Up</a></li>
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
	<div class="container">
		<div class="space"></div>
		<h1 class="title text-center space" id="contact">Sign Up</h1>
		<div class="space"></div>
		<div class="row">						
			<div class="col-sm-12">
				<div class="footer-content">
					<form name="SignUpForm" id="SignUpForm" method="post">
						<div class="form-group has-feedback">
							<label class="sr-only" for="name">Name</label>
							<input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="email">Email address</label>
							<input type="email" class="form-control" id="email" placeholder="Email Address" name="email" required>
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="password">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="phone">Phone</label>
							<input type="text" class="form-control" id="phone" placeholder="Phone Number" name="phone" required>
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="phone">Address</label>
							<textarea class="form-control" id="address" placeholder="Address" name="address" required></textarea>
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="city">City</label>
							<input type="text" class="form-control" id="city" placeholder="City" name="city" required>
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="state">State</label>
							<input type="text" class="form-control" id="state" placeholder="State" name="state" required>
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="phone">Country</label>
							<input type="text" class="form-control" id="country" placeholder="Country" name="country" required>
						</div>
						<div class="text-center">
							<input type="submit" name="Signup" value="SIGN UP" class="btn btn-default">
						</div>
						<?php if(isset($_SESSION['emailexists']) && $_SESSION['emailexists'] != "") { echo "<div class='text-danger text-center'>".$_SESSION['emailexists']."</div>"; unset($_SESSION['emailexists']); } ?>
						<?php if(isset($_SESSION['signupsuccess']) && $_SESSION['signupsuccess'] != "") { echo "<div class='text-success text-center'>".$_SESSION['signupsuccess']."</div>"; unset($_SESSION['signupsuccess']); } ?>
					</form>
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