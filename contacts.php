<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Electrician, Repairing, Air condition, Security systems">
	<meta name="description" content="Snow City">
	<meta name="author" content="Ansonika">
	<title>Snow City</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
		href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
		href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- Google web fonts -->
	<link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Roboto:300,400,400i,500,500i,700,700i,900i"
		rel="stylesheet">

	<!-- BASE CSS -->
	<link href="css/base.css" rel="stylesheet">

	<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<div id="preloader">
		<div class="sk-spinner sk-spinner-wave">
			<div class="sk-rect1"></div>
			<div class="sk-rect2"></div>
			<div class="sk-rect3"></div>
			<div class="sk-rect4"></div>
			<div class="sk-rect5"></div>
		</div>
	</div><!-- End Preload -->

	<div class="layer"></div><!-- Mobile menu overlay mask -->

	<!-- Header================================================== -->
	<header>
		<div id="top_line">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 hidden-xs">
						<span id="tag_line">"Electrician since 1998"</span>
					</div>
					<div class="col-sm-8">
						<ul id="top_links">
							<li><a href="tel://+918939128939" id="phone_top">+91 89391 28939</a><span id="opening">Mon -
									Sat 8.00/18.00</span></li>
						</ul>
					</div>
				</div><!-- End row -->
			</div><!-- End container-->
		</div><!-- End top line-->

		<div class="container">
			<div class="row">
				<div class="col-xs-3">
					<div id="logo">
						<a href="index.php"><img src="img/logo.png" width="175" height="35" alt="Electrician"
								data-retina="true"></a>
					</div>
				</div>
				<?php require('navbar.php') ?>
			</div>
		</div><!-- container -->
	</header><!-- End Header -->

	<section id="sub_header">
		<div class="container">
			<div class="main_title">
				<h1>Contacts</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.
				</p>
			</div>
		</div>
	</section><!-- End section -->

	<main>
		<div class="container margin_60">
			<div class="row">

				<div class="col-md-9">

					<div>
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.347757085113!2d80.19846057463442!3d13.140450711154779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526490e6bcb707%3A0x7c0084d1d88d3df9!2s30%2C%20Surapet%20Main%20Rd%2C%20Mukambika%20Nagar%2C%20Vinayakapuram%2C%20Puzhal%2C%20Chennai%2C%20Tamil%20Nadu%20600099!5e0!3m2!1sen!2sin!4v1696747739559!5m2!1sen!2sin"
							width="600" height="850" style="border:0;" allowfullscreen="" loading="lazy"
							referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div><!-- end map-->

					<hr>

					<div id="message-contact"></div>
					<form method="post" action="" id="contactform">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>First name</label>
									<input type="text" class="form-control" id="name_contact" name="name_contact">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Last name</label>
									<input type="text" class="form-control" id="lastname_contact"
										name="lastname_contact">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Email</label>
									<input type="email" id="email_contact" name="email_contact" class="form-control">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Phone number</label>
									<input type="text" id="phone_contact" name="phone_contact" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Your message</label>
									<textarea rows="5" id="message_contact" name="message_contact" class="form-control"
										style="height:100px;"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Are you human? 3 + 1 =</label>
									<input type="text" id="verify_contact" class=" form-control">
								</div>
								<input type="submit" value="Submit" class="btn_1 green medium add_bottom_30"
									id="submit-contact" />
							</div>
						</div>
					</form>
				</div><!-- End col-md-9 -->

				<div class="col-md-3">
					<div class="box_style_2">
						<h5>Address</h5>
						<ul>
							<li>30, Surapet Main Rd, Mukambika Nagar, Vinayakapuram, Puzhal,<br>
								Chennai,
								Tamil Nadu, <br> 600099.</li>
						</ul>
						<ul>
							<li><strong>Help center</strong><br><a href="tel://+918939128939">+91 89391 28939</a></li>
						</ul>
					</div>
				</div><!-- End col-md-3 -->
			</div><!-- End row -->
		</div><!-- End container -->
		<?php require('whatsapp.php') ?>
	</main><!-- End main -->

	<footer>
		<div class="container">
			<div class="row ">
				<div class="col-md-4 col-sm-6">
					<img src="img/logo-footer.png" width="175" height="35" alt="Electrician" data-retina="true"
						id="logo_footer">
					<p>Elevate Comfort, Enhance Security, and Power Your Space with Our Expert Services. From Premium AC
						Installations to Cutting-Edge Security Alarms and Precision Wiring Solutions, We've Got You
						Covered. Experience Excellence in Every Cooling Breeze, Secure Moment, and Seamless Connection.
					</p>
				</div>
				<div class="col-md-3 col-md-offset-1 col-sm-3">
					<h3>Discover</h3>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About us</a></li>
						<li><a href="contacts.php">Contacts</a></li>
						<li><a href="acservices.php">Air Condition Services</a></li>
						<li><a href="securitysystemservices.php">Security Alarm Services</a></li>
						<li><a href="wiringservices.php">Wiring Services</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-3" id="contact_bg">
					<h3>Contacts</h3>
					<ul id="contact_details_footer">
						<li id="address_footer">30, Surapet Main Rd, Mukambika Nagar, Vinayakapuram, Puzhal,<br>
							Chennai,
							Tamil Nadu, <br> 600099.</li>
						<li id="phone_footer"><a href="tel://+918939128939">+91 89391 28939</a> / <a
								href="tel://+918939128939">+91 89391 28939</a></li>
						<li id="email_footer"><a href="#">info@electrician.com</a></li>
					</ul>
				</div>
			</div><!-- End row -->
		</div><!-- End container -->
		<div id="copy">
			<div class="container">
				© IDS - All rights reserved.
			</div>
		</div><!-- End copy -->
	</footer>
	<!-- End footer -->

	<div id="toTop"></div><!-- Back to top button -->

	<!-- Common scripts -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts_min.js"></script>
	<script src="js/functions.js"></script>

	<!-- Form validation -->
	<script src="assets/validate.js"></script>

</body>
</html>