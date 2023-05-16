<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>About Us</title>
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
												<li class="active"><a href="aboutus.php">About Us</a></li>
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
		<section class="section clearfix secPadding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center">About Us</h1>
						<p class="lead text-center">Dr. Abdularahman Talaat.</p>
						<div class="space"></div>
						<div class="row">
							<div class="col-md-6">
								<img src="images/section-image-1.png" alt="">
								<div class="space"></div>
							</div>
							<div class="col-md-6">
								<p>Abdulrahman Talaat is a skilled and compassionate physical therapy and nutrition doctor dedicated to helping patients improve their overall health and well-being. With extensive training and experience in both fields, Dr. Talaat brings a unique and holistic approach to his practice..</p>
								<p>As a physical therapist, Dr. Talaat works with patients to develop personalized treatment plans that focus on improving their mobility, strength, and overall function. He utilizes a variety of techniques, including manual therapy, exercise, and modalities such as ultrasound and electrical stimulation, to help his patients recover from injury or manage chronic conditions.</p>
								<ul class="list-unstyled">
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Physical therapy evaluation and treatment for injuries, pain, and mobility issues</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Physical therapy evaluation and treatment for injuries, pain, and mobility issues</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Exercise prescription and guidance to help patients regain strength and mobility</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Nutrition counseling and meal planning to help patients achieve their health goals</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Weight management services to help patients achieve and maintain a healthy weight</li>
								</ul>
							</div>
						</div>
						<div class="space"></div>
						<h2>We OFFER best of best service</h2>
						<div class="row">
							<div class="col-md-6">
								<p>Lorem ipsum dolor sit amet, adipisicing  sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde error commodi architecto, laudantium culpa optio corporis quod earumdignissimos eius mollitia et quas officia doloremque.</p>
									<ul class="list-unstyled">
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Lorem ipsum enimdolor sit amet</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Explicabo deleniti neque aliquid</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Consectetur adipisicing elit</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Lorem ipsum dolor sit amet</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Quo issimos molest quibusdam temporibus</li>
								</ul>
								<p>Dolores quam magnam aadipisicing  sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde molestias velit eveniet, facere autem saepe autrunt.</p>
							</div>
							<div class="col-md-6">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													Collapsible Group Item #1
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												Consectetur adipisicing  sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat ntium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earumdignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt.
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingTwo">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													Collapsible Group Item #2
												</a>
											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
											<div class="panel-body">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat ntium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earumdignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt.
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingThree">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
													Collapsible Group Item #3
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
											<div class="panel-body">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi adipisci illo, voluptatum ipsam fuga error commodi architecto, laudantium culpa tenetur at id, beatae placeat deserunt iure quas voluptas fugit eveniet.
											</div>
										</div>
									</div>
								</div>
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
		<script type="text/javascript" src="./js/jquery.min.js"></script>
		<script type="text/javascript" src="./js/bootstrap.min.js"></script>
	</body>
</html>