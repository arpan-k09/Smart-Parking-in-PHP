<?php

    session_start();
// session_unset();


?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Services</title>
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
					

					
					<!-- Lists -->
						<section><div id="res">
							<h2>Services</h2>
							<div class="row">
								<div class="6u 12u$(xsmall)">

									<h4>Vehicle Related Services</h4>

										<ul class="actions vertical">
											<li><a href="add_v.php" class="button special fit">Add Vehicle</a></li>
											<li><a href="remove_veh.php" class="button special fit">Remove Vehicle</a></li>
											<li><a href="veh_info.php" class="button special fit">Vehicle Info</a></li>
											
										</ul>
									
								</div>
								<div class="6u$ 12u$(xsmall)">

									<h4>Parking Related Services</h4>
										
										<ul class="actions vertical">
											
											<li><button  class="button special fit" onclick="AJAX_BOOM()">Book Slot</button></li>
											<li><a href="cnl_s.php" class="button special fit">Cancel Slot</a></li>
											
											
										</ul>
								</div>
							</div>
						</div></section>
				</div>
			</section>			
			<!-- href="book_s.php" -->
		<!-- Scripts -->
			
			<script>
			
				function AJAX_BOOM(){
					var xhr = new	XMLHttpRequest();
					xhr.open("GET","http://localhost:80/new/php/response.php",true);
					xhr.send();
					xhr.onload = function(){
						if(xhr.status === 200){
							document.getElementById("res").innerHTML = this.responseText;
						}
					}
				}
						
			</script>
	</body>
</html>