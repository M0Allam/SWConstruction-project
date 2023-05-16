<?php
include_once("configure.php");
if(isset($_POST['Update']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$emailSql = mysqli_query($con, "SELECT * from users WHERE email = '".$email."' and id != '".$_SESSION['loginID']."'");
	$emailCount = mysqli_num_rows($emailSql);
	if($emailCount > 0)
		$_SESSION['emailexists'] = "Email Address already exists. Please try with another Email Address";
	else
	{
		mysqli_query($con, "UPDATE users SET name = '".$name."', email = '".$email."', password = '".$password."', phone = '".$phone."', address = '".$address."', city = '".$city."', state = '".$state."', country = '".$country."' WHERE id = '".$_SESSION['loginID']."'");
		$_SESSION['profilesuccess'] = "Profile Updated Successfully";
		$userSql = mysqli_query($con, "SELECT * from users WHERE id = '".$_SESSION['loginID']."'");
		$userCount = mysqli_num_rows($userSql);
		if($userCount > 0)
		{
			$userRow = mysqli_fetch_array($userSql);
		}
	}
}
if(isset($_SESSION['loginID']) && $_SESSION['loginID'] != "")
{
	$userSql = mysqli_query($con, "SELECT * from users WHERE id = '".$_SESSION['loginID']."'");
	$userCount = mysqli_num_rows($userSql);
	if($userCount > 0)
	{
		$userRow = mysqli_fetch_array($userSql);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Profile</title>
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
												<li class="active"><a href="profile.php">My Profile</a></li>
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
	<div class="container">
		<div class="space"></div>
		<h1 class="title text-center space" id="contact">Profile</h1>
		<div class="space"></div>
		<div class="row">						
			<div class="col-sm-12">
				<div class="footer-content">
					<form name="ProfileForm" id="ProfileForm" method="post">
						<div class="form-group has-feedback">
							<label class="sr-only" for="name">Name</label>
							<input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?=$userRow['name'];?>" required>
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="email">Email address</label>
							<input type="email" class="form-control" id="email" placeholder="Email Address" name="email" value="<?=$userRow['email'];?>" required>
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="password">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Password" name="password" value="<?=$userRow['password'];?>" required>
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="phone">Phone</label>
							<input type="text" class="form-control" id="phone" placeholder="Phone Number" name="phone" value="<?=$userRow['phone'];?>" required>
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="phone">Address</label>
							<textarea class="form-control" id="address" placeholder="Address" name="address" required> <?=$userRow['address'];?></textarea>
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="city">City</label>
							<input type="text" class="form-control" id="city" placeholder="City" name="city" value="<?=$userRow['city'];?>" required>
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="state">State</label>
							<input type="text" class="form-control" id="state" placeholder="State" name="state" value="<?=$userRow['state'];?>" required>
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="phone">Country</label>
							<input type="text" class="form-control" id="country" placeholder="Country" name="country" value="<?=$userRow['country'];?>" required>
						</div>
						<div class="text-center">
							<input type="submit" name="Update" value="UPDATE" class="btn btn-default">
						</div>
						<?php if(isset($_SESSION['emailexists']) && $_SESSION['emailexists'] != "") { echo "<div class='text-danger text-center'>".$_SESSION['emailexists']."</div>"; unset($_SESSION['emailexists']); } ?>
						<?php if(isset($_SESSION['profilesuccess']) && $_SESSION['profilesuccess'] != "") { echo "<div class='text-success text-center'>".$_SESSION['profilesuccess']."</div>"; unset($_SESSION['profilesuccess']); } ?>
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
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>