<?php

    session_start();
// session_unset();


?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>BOOK SLOT</title>
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

		<!-- Main -->
			<section id="main">
				<div class="inner">
					<header class="major special">
						<h1>BOOK SLOT</h1>
						<hr><br>
						
					</header>
				
						<section>

							<h4>For 2-Wheelers(Bikes)</h4>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
										<tr>
											
											<th>Structure of Parking (per hour)</th>
											<th>Price (in Rs.)</th>

										</tr>
									</thead>
									<tbody>
										<tr>
											
											<td>For 1 hour</td>
											<td>5.00</td>
										</tr>
										<tr>
											
											<td>For 1 hour to 5 hours</td>
											<td>10.00</td>
										</tr>
										<tr>
											
											<td>For 5 hours to 24 hours(1 Day)</td>
											<td>20.00</td>
										</tr>
										<tr>
											
											<td>Above 24 hours(1 Day)</td>
											<td>25.00</td>
										</tr>
										
									</tbody>
									
								</table>
							</div>
						</section>		
						<br><hr><br>
						<section>

							<h4>For 4-Wheelers(Cars)</h4>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
										<tr>
											
											<th>Structure of Parking (per hour)</th>
											<th>Price (in Rs.)</th>

										</tr>
									</thead>
									<tbody>
										<tr>
											
											<td>For 1 hour</td>
											<td>10.00</td>
										</tr>
										<tr>
											
											<td>For 1 hour to 5 hours</td>
											<td>20.00</td>
										</tr>
										<tr>
											
											<td>For 5 hours to 24 hours(1 Day)</td>
											<td>25.00</td>
										</tr>
										<tr>
											
											<td>Above 24 hours(1 Day)</td>
											<td>30.00</td>
										</tr>
										
									</tbody>
									
								</table>
							</div>
						</section>		
						<div class='6u 12u$(xsmall)' style='margin-left:23.33%;margin-right:33.33%'>
        				<a class='button special fit' href='http://localhost/new/php/confirmbooking.php'>Confirm Booking</a></div>
						
				</div>
			</section>
	


	</body>
</html>