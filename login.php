<?php
include_once("configure.php");
if(isset($_POST['Login']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$emailSql = mysqli_query($con, "SELECT * from users WHERE email = '".$email."'");
	$emailCount = mysqli_num_rows($emailSql);
	if($emailCount > 0)
	{
		$userSql = mysqli_query($con, "SELECT * from users WHERE email = '".$email."' and password = '".$password."'");
		$userCount = mysqli_num_rows($userSql);
		if($userCount > 0)
		{
			$row = mysqli_fetch_array($userSql);
			$_SESSION['loginID'] = $row['id'];
			$_SESSION['loginEmail'] = $row['email'];
			header("Location: index.php");
		}
		else
			$_SESSION['incorrectpassword'] = "Incorrect Password";
	}
	else
		$_SESSION['emailnotexists'] = "Email Address does not exists. Please try with another Email Address";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login</title>
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
												<li><a href="signup.php">Sign Up</a></li>
												<li class="active"><a href="login.php">Login</a></li>
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
		<h1 class="title text-center space" id="contact">Login</h1>
		<div class="row">						
			<div class="col-sm-12">
				<div class="footer-content">
					<form name="LoginForm" id="LoginForm" method="post">
						<div class="form-group has-feedback">
							<label class="sr-only" for="email">Email address</label>
							<input type="email" class="form-control" id="email" placeholder="Email Address" name="email" required>
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="password">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
						</div>
						<div class="text-center">
							<input type="submit" name="Login" value="LOGIN" class="btn btn-default">
						</div>
						<?php if(isset($_SESSION['emailnotexists']) && $_SESSION['emailnotexists'] != "") { echo "<div class='text-danger text-center'>".$_SESSION['emailnotexists']."</div>"; unset($_SESSION['emailnotexists']); } ?>
						<?php if(isset($_SESSION['incorrectpassword']) && $_SESSION['incorrectpassword'] != "") { echo "<div class='text-danger text-center'>".$_SESSION['incorrectpassword']."</div>"; unset($_SESSION['incorrectpassword']); } ?>
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