<?php

    session_start();
// session_unset();


?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Smart Parking System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
		<header id="header">
			<div class="inner">
				<a href="index.php" class="logo">Smart Parking</a>
				<nav id="nav">
					<a href="index.php">Home</a>
					<?php
						if(!isset($_SESSION['user'])){
							echo '<a href="signup.php">Register</a>';
							echo '<a href="login.php">Login</a>';
							echo '<a href="after_l.php">Services</a>
								<a href="c_us.php">Contact Us</a>';
						}
						else{
							echo '<a href="after_l.php">Services</a>
								<a href="c_us.php">Contact Us</a>';
							echo '<a href="#">'.$_SESSION['name'].'</a>';
							echo '<a href="php/logout.php">Logout</a>';
						}
					?>
					
					
				</nav>
			</div>
		</header>
			

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>Smart Parking :<br> <span>A free + fully responsive site<br /><br>
					 
					
				</div>
			</section>

		<!-- One -->
			<section id="one">
				<div class="inner">
					<header>
						<h2>A Smarter Way to Park</h2>
					</header>
					<p>You've got places to be. ParkMobile will help get you there faster. Our free app makes it easy to find and pay for parking without running back to feed the meter. And you can reserve spots ahead of time for concerts and sporting events. With more than a million spots and 3,000 locations across North America, ParkMobile gives you a smarter way to park when you're on the go.</p>
					<ul class="actions">
						<li><a href="#" class="button alt">Learn More</a></li>
					</ul>
				</div>
			</section>

		<!-- Two -->
			<section id="two">
				<div class="inner">
					<article>
						<div class="content">
							<header>
								<h3>How It Works</h3>
							</header>
							<div class="image fit">
								<img src="images/p_1.jpg" alt="" />
							</div>
							<p>Whether you're looking for a spot in the moment or want to reserve a space ahead of time, ParkMobile puts the power in the palm of your hand.</p>
						</div>
					</article>
					<article class="alt">
						<div class="content">
							<header>
								<h3>Power Your Business with Us</h3>
							</header>
							<div class="image fit">
								<img src="images/p_2.jpg" alt="" />
							</div>
							<p>We are the leader in smart parking and mobility solutions. We connect you with our audience of over 11 million people looking for parking every single day. Municipalities, universities, airports, stadium venues and other businesses use ParkMobile solutions to increase parking revenue, decrease operational costs and create happy customers. Contact us to learn how we can help your business.</p>
						</div>
					</article>
				</div>
			</section>

		<!-- Three -->
			<section id="three">
				<div class="inner">
					<article>
						<div class="content">
							<span class="icon fa-laptop"></span>
							<header>
								<h3>Park Your Car</h3>
							</header>
							<p>Park your car in an on or off-street parking sport where park mobile is accepted.</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Learn More</a></li>
							</ul>
						</div>
					</article>
					<article>
						<div class="content">
							<span class="icon fa-diamond"></span>
							<header>
								<h3>Enter the Zone #</h3>
							</header>
							<p>Look for a Smart Parking Zone number on the signs around the meter. Enter that number into the app.</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Learn More</a></li>
							</ul>
						</div>
					</article>
					<article>
					<div class="content">
							<span class="icon fa-laptop"></span>
							<header>
								<h3>Start Parking</h3>
							</header>
							<p>Select the time you want to park and start the session. If you're running late, extend time in the app.</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Learn More</a></li>
							</ul>
						</div>
					</article>
				</div>
			</section>

		
			<section id="two">
				<div class="inner">
					<article>
						<div class="content">
							<header>
								<h3>Parking by City</h3>
							</header>
							<div class="image fit">
								<img src="images/p_1.jpg" alt="" />
							</div>
							<p>No matter where you want to park, Smart Parking is there. We're available in most major cities across the India.</p>
						</div>
					</article>
					<article class="alt">
						<div class="content">
							<header>
								<h3>Parking by Venue</h3>
							</header>
							<div class="image fit">
								<img src="images/p_2.jpg" alt="" />
							</div>
							<p>Reserve your parking spot ahead of time at many of the top sports and entertainment venues around the country.</p>
						</div>
					</article>
				</div>
			</section>

			<section id="three">
				<div class="inner">
					<article>
						<div class="content">
							<span class="icon fa-laptop"></span>
							<header>
								<h3>Search for Spots</h3>
							</header>
							<p>Select 'Reserve Parking' in the ParkMobile app or site to find available lots in area where you're going.</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Learn More</a></li>
							</ul>
						</div>
					</article>
					<article>
						<div class="content">
							<span class="icon fa-diamond"></span>
							<header>
								<h3>Select the Lot</h3>
							</header>
							<p>Review full details on all the parking options in the area and select the lot that's right for you.</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Learn More</a></li>
							</ul>
						</div>
					</article>
					<article>
					<div class="content">
							<span class="icon fa-laptop"></span>
							<header>
								<h3>Book It</h3>
							</header>
							<p>Book your reservation,get your mobile pass or permit and head to the lot when its' time to park.</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Learn More</a></li>
							</ul>
						</div>
					</article>
				</div>
			</section>

		

		

	</body>
</html>