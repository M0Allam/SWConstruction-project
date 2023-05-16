<?php
include_once("configure.php");
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
<title>FITNESS ZONE</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./css/bootstrap.css" rel="stylesheet"> 
<link href="./css/style.css" rel="stylesheet">
</head>
	<body>
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
												<li class="active"><a href="index.php">Home</a></li>
												<li><a href="services.php">Our Services</a></li>
												<li><a href="aboutus.php">About Us</a></li>
												<li><a href="contactus.php">Contact Us</a></li>
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
		<section class="hero-caption secPadding">
		<div class="container">
	
	<div class="row " style="margin-top: 0px;">
				<div class="col-sm-12">
	<h2>welcome to <strong>OUR</strong> - <span>WORLD</span> class service centre</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo. Sed quis tortor magna. Maecenas hendrerit feugiat pulvinar. Aenean condimentum quam eu ultricies cursus.  Nulla facilisi. In hac habitasse platea dictumst. Ut nec tellus neque. Sed non dui eget arcu elementum facilisis.</p>
 	</div>
			</div>
		</div>
</section> 
		<section class="section transprant-bg pclear secPadding">
			<div class="container">
				<h1 id="services" class="title text-center">Our Services</h1>
				<div class="space"></div>
			 
			<div class="row">
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="fa fa-cloud"></i></div>
                  <h4 class="heading">Aerobics</h4>
                  <p>Fifth abundantly made Give sixth hath. Cattle creature i be don't them.</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="fa fa fa-heart"></i></div>
                  <h4 class="heading">Cardio</h4>
                  <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural.</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="fa fa-thumbs-o-up"></i></div>
                  <h4 class="heading">GYM</h4>
                  <p>Am terminated it excellence invitation projection as. She graceful shy. </p>
                </div>
              </div>
            </div>
			<div class="row">
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="fa fa-recycle"></i></div>
                  <h4 class="heading">Consulting</h4>
                  <p>Fifth abundantly made Give sixth hath. Cattle creature i be don't them.</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="box box-services">
                 <div class="icon"><i class="fa fa-cubes"></i></div>
                  <h4 class="heading">SPA</h4>
                  <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural.</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <h4 class="heading">Energy Food</h4>
                  <p>Am terminated it excellence invitation projection as. She graceful shy. </p>
                </div>
              </div>
            </div>
			
			</div>			  
		</section>
		<section class="section clearfix secPadding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center">About Us</h1>
						<p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. laudantium culpa tenetur.</p>
						<div class="space"></div>
						<div class="row">
							<div class="col-md-6">
								<img src="images/section-image-1.png" alt="">
								<div class="space"></div>
							</div>
							<div class="col-md-6">
								<p>Lorem ipsum dolor sit amet, cadipisicing  sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde fuga error commodi architecto, laudantium culpa tenetur at id, beatae pet.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. adipisicing  sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium,m deserunt.</p>
								<ul class="list-unstyled">
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Lorem ipsum enimdolor sit amet</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Explicabo deleniti neque aliquid</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Consectetur adipisicing elit</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Lorem ipsum dolor sit amet</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Quo issimos molest quibusdam temporibus</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
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