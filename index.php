<?php
$link = mysql_connect("localhost","root","");
mysql_select_db("taipeizoo");
mysql_query("set names utf8");
$data = mysql_query("select * from animal");
if (!$link) {
	die('error'.mysql_error());
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>	Taipei Zoo Management System</title>
	<meta name="description" content="Kite Coming Soon HTML Template by Jewel Theme" >
	<meta name="author" content="Jewel Theme">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

	<!-- Bootstrap  -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- icon fonts font Awesome -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">

	<!-- Custom Styles -->
	<link href="assets/css/style.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<![endif]-->

</head>
<body>
<!--
	<?php
		$rs = mysql_fetch_row($data);
		echo "$data  A_ID <br> $rs[0] <br>";
		echo "$data <br> A_NAME <br> $rs[1] <br>";
		echo "$data <br> ORDER <br> $rs[2] <br>";

	?>
-->
	<!-- Preloader -->
	<div id="preloader">
		<div id="loader">
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="lading"></div>
		</div>
	</div><!-- /#preloader -->
	<!-- Preloader End-->


	<!-- Main Menu -->
	<div id="main-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">

		<div class="navbar-header">
			<!-- responsive navigation -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<i class="fa fa-bars"></i>
			</button> <!-- /.navbar-toggle -->

		</div> <!-- /.navbar-header -->

		<nav class="collapse navbar-collapse">
			<!-- Main navigation -->
			<ul id="headernavigation" class="nav navbar-nav">
				<li class="active"><a href="#page-top">Home</a></li>	
				<li><a href="#about">About</a></li>	
				<li><a href="#read">Read</a></li>	
				<li><a href="#contact">Contact</a></li>		
			</ul> <!-- /.nav .navbar-nav -->
		</nav> <!-- /.navbar-collapse  -->
	</div><!-- /#main-menu -->
	<!-- Main Menu End -->
	

	<!-- Page Top Section -->
	<section id="page-top" class="section-style" data-background-image="images/background/page-top.jpg">
		<div class="pattern height-resize">
			<div class="container">
				<h1 class="site-title">
					Kelly
				</h1><!-- /.site-title -->
				<h3 class="section-name">
					<span>
						We Are
					</span>
				</h3><!-- /.section-name -->
				<h2 class="section-title">
					Taipei Zoo Management
				</h2><!-- /.Section-title  -->
				<div id="time_countdown" class="time-count-container">

					
				</div><!-- /.time-count-container -->

				<div class="next-section">
					<a class="go-to-about"><span></span></a>
				</div><!-- /.next-section -->
				
			</div><!-- /.container -->
		</div><!-- /.pattern -->		
	</section><!-- /#page-top -->
	<!-- Page Top Section  End -->


	<!-- About Us Section -->
	<section id="about" class="section-style" data-background-image="images/background/about-us.jpg">
		<div class="pattern height-resize"> 
			<div class="container">
				<h3 class="section-name">
					<span>
						About Us
					</span>
				</h3><!-- /.section-name -->
				<h2 class="section-title">
					We Are
				</h2><!-- /.Section-title  -->
				<p class="section-description">
					安安
				</p><!-- /.section-description -->

				<div class="team-container">
					<div class="row">
						<div class="col-sm-4">
							<div class="team-member">
								<figure>
									<img src="images/team/team-member-1.jpg" alt="Team Member">
									<figcaption>
										<p class="member-name">Kelly</p>
										<p class="designation">
											CEO
										</p><!-- /.designation -->

									</figcaption>
								</figure>
								<div class="social-btn-container">
									<div class="team-socail-btn">
										<span class="social-btn-box facebook-btn-container">
											<a href="#" class="facebook-btn">
												<i class="fa fa-facebook"></i>
											</a><!-- /.facebook-btn -->
										</span><!-- /.social-btn-box -->

										<span class="social-btn-box twitter-btn-container">
											<a href="#" class="twitter-btn">
												<i class="fa fa-twitter"></i>
											</a><!-- /.twitter-btn -->
										</span><!-- /.social-btn-box -->

										<span class="social-btn-box linkedin-btn-container">
											<a href="#" class="linkedin-btn">
												<i class="fa fa-linkedin"></i>
											</a><!-- /.linkedin-btn -->
										</span><!-- /.social-btn-box -->

										<span class="social-btn-box github-btn-container">
											<a href="#" class="github-btn">
												<i class="fa fa-github-alt"></i>
											</a><!-- /.github-btn -->
										</span><!-- /.social-btn-box -->
									</div><!-- /.team-socail-btn -->
								</div><!-- /.social-btn-container -->
							</div><!-- /.team-member -->
						</div><!-- /.col-sm-4 -->


						<div class="col-sm-4">
							<div class="team-member">
								<figure>
									<img src="images/team/team-member-2.jpg" alt="Team Member">
									<figcaption>
										<p class="member-name">
											Victor
										</p><!-- /.member-name -->
										<p class="designation">
											Designer 
										</p><!-- /.designation -->

									</figcaption>
								</figure>
								<div class="social-btn-container">
									<div class="team-socail-btn">
										<span class="social-btn-box facebook-btn-container">
											<a href="#" class="facebook-btn">
												<i class="fa fa-facebook"></i>
											</a><!-- /.facebook-btn -->
										</span><!-- /.social-btn-box -->

										<span class="social-btn-box twitter-btn-container">
											<a href="#" class="twitter-btn">
												<i class="fa fa-twitter"></i>
											</a><!-- /.twitter-btn -->
										</span><!-- /.social-btn-box -->

										<span class="social-btn-box linkedin-btn-container">
											<a href="#" class="linkedin-btn">
												<i class="fa fa-linkedin"></i>
											</a><!-- /.linkedin-btn -->
										</span><!-- /.social-btn-box -->

										<span class="social-btn-box github-btn-container">
											<a href="#" class="github-btn">
												<i class="fa fa-github-alt"></i>
											</a><!-- /.github-btn -->
										</span><!-- /.social-btn-box -->
									</div><!-- /.team-socail-btn -->
								</div><!-- /.social-btn-container -->
							</div><!-- /.team-member -->
						</div><!-- /.col-sm-4 -->


						<div class="col-sm-4">
							<div class="team-member">
								<figure>
									<img src="images/team/team-member-3.jpg" alt="Team Member">
									<figcaption>
										<p class="member-name">
											echim
										</p><!-- /.member-name -->
										<p class="designation">
											Developer 
										</p><!-- /.designation -->

									</figcaption>
								</figure>
								<div class="social-btn-container">
									<div class="team-socail-btn">
										<span class="social-btn-box facebook-btn-container">
											<a href="#" class="facebook-btn">
												<i class="fa fa-facebook"></i>
											</a><!-- /.facebook-btn -->
										</span><!-- /.social-btn-box -->

										<span class="social-btn-box twitter-btn-container">
											<a href="#" class="twitter-btn">
												<i class="fa fa-twitter"></i>
											</a><!-- /.twitter-btn -->
										</span><!-- /.social-btn-box -->

										<span class="social-btn-box linkedin-btn-container">
											<a href="#" class="linkedin-btn">
												<i class="fa fa-linkedin"></i>
											</a><!-- /.linkedin-btn -->
										</span><!-- /.social-btn-box -->

										<span class="social-btn-box github-btn-container">
											<a href="#" class="github-btn">
												<i class="fa fa-github-alt"></i>
											</a><!-- /.github-btn -->
										</span><!-- /.social-btn-box -->
									</div><!-- /.team-socail-btn -->
								</div><!-- /.social-btn-container -->
							</div><!-- /.team-member -->
						</div><!-- /.col-sm-4 -->
					</div><!-- /.row -->
					
				</div><!-- /.team-container -->

				<div class="next-section">
					<a class="go-to-subscribe"><span></span></a>
				</div><!-- /.next-section -->

			</div><!-- /.container -->
		</div><!-- /.pattern -->
		
		
	</section><!-- /#about -->
	<!-- About Us Section End -->

<script>
function link2read() {
	answer = confirm("你確定要連到清大的首頁嗎？");
	if (answer)
		location.href="http://www.nthu.edu.tw";
}
</script>


	<!-- Read Section -->
	<section id="read" class="section-style" data-background-image="images/background/newsletter.jpg">
		<div class="pattern height-resize">
			<div class="container">
				<h3 class="section-name">
					<span>
						Read
					</span>
				</h3><!-- /.section-name -->
				<h2 class="section-title">
					Search for animals? 
				</h2><!-- /.Section-title  -->
				<p class="section-description">
					Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
				</p><!-- /.section-description -->

				<form class="news-letter" action="php/read.php" method="post">
					<p class="alert-success"></p>
					<p class="alert-warning"></p>

					<div class="subscribe-hide">
						<input class="form-control" type="email" id="subscribe-email" name="read_name" placeholder="Enter the animal's name / id / orders!"  required>
						<button  type="submit" id="subscribe-submit" class="btn" "><i class="fa fa-search"></i></button>
						<button  type="submit1" id="subscribe-submit1" class="btn" "><i class="fa fa-search"></i></button>
						<span id="subscribe-loading" class="btn"> <i class="fa fa-refresh fa-spin"></i> </span>
						<div class="subscribe-error"></div>
					</div><!-- /.subscribe-hide -->
					<div class="subscribe-message"></div>
				</form><!-- /.news-letter -->

				<div class="social-btn-container">

					</div><!-- /.social-btn-container -->

					<div class="next-section">
						<a class="go-to-contact"><span></span></a>
					</div><!-- /.next-section -->

				</div><!-- /.container -->
			</div><!-- /.pattern -->

		</section><!-- /#subscribe -->
		<!-- Subscribe Section End -->



		<!-- Contact Section -->
		<section id="contact" class="section-style" data-background-image="images/background/contact.jpg">
			<div class="pattern height-resize">
				<div class="container">
					<h3 class="section-name">
						<span>
							Contact
						</span>
					</h3><!-- /.section-name -->
					<h2 class="section-title">
						Get in Touch 
					</h2><!-- /.Section-title  -->
					<p class="section-description">
						Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
					</p><!-- /.section-description -->

					<form id="contact-form" action="php/email.php" method="post" class="clearfix">
						<div class="contact-box-hide">
							<div class="col-sm-6">
								<input type="text"  class="form-control" id="first_name" name="first_name" required placeholder="First Name">
								<span class="first-name-error"></span>
							</div>
							<div class="col-sm-6">
								<input type="text"  class="form-control" id="last_name" name="last_name" required placeholder="Last Name">
								<span class="last-name-error"></span>
							</div>
							<div class="col-sm-6">
								<input type="email" class="form-control"  id="contact_email" name="contact_email" required placeholder="Email Address">
								<span class="contact-email-error"></span>
							</div>
							<div class="col-sm-6">
								<input type="text"  class="form-control" id="subject" name="contact_subject" required placeholder="Subject">
								<span class="contact-subject-error"></span>
							</div>
							<div class="col-sm-10">
								<textarea class="form-control" rows="5" id="message" name="message" required placeholder="Message"></textarea>
								<span class="contact-message-error"></span>
							</div>
							<div class="col-sm-2">
								<button id="contact-submit" class="btn custom-btn col-xs-12" type="submit" name="submit"><i class="fa fa-rocket"></i></button>
								<span id="contact-loading" class="btn custom-btn col-xs-12"> <i class="fa fa-refresh fa-spin"></i> </span>
							</div>
						</div><!-- /.contact-box-hide -->
						<div class="contact-message"></div>

					</form><!-- /#contact-form -->		

					<div class="next-section">
						<a class="go-to-page-top"><span></span></a>
					</div><!-- /.next-section -->

				</div><!-- /.container -->
			</div><!-- /.pattern -->

		</section><!-- /#contact -->
		<!-- Contact Section End -->



		<!-- Footer Section -->
		<footer id="footer-section">
			<p class="copyright">
				&copy; <a href="http://jeweltheme.com/html/kite/">IM107</a> 2016-2017, All Rights Reserved. Designed by & Developed by <a href="http://jeweltheme.com">Jewel Theme</a>
			</p>
		</footer>
		<!-- Footer Section End -->


		<!-- jQuery Library -->
		<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
		<!-- Modernizr js -->
		<script type="text/javascript" src="assets/js/modernizr-2.8.0.min.js"></script>
		<!-- Plugins -->
		<script type="text/javascript" src="assets/js/plugins.js"></script>
		<!-- Custom JavaScript Functions -->
		<script type="text/javascript" src="assets/js/functions.js"></script>
		<!-- Custom JavaScript Functions -->
		<script type="text/javascript" src="assets/js/jquery.ajaxchimp.min.js"></script>

	</body>
	</html>