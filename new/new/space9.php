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
					

					
						<section>
                            <h3>Parking</h3>
                            <hr>
                            <h4>Stadium Parking, Athwa, Surat, Gujarat 395007</h4>

                            
                            <iframe class="12u$" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12513.191107397086!2d72.8057670980889!3d21.18445198618651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x710a9a5a0b35662e!2sStadium+Parking!5e0!3m2!1sen!2sin!4v1553608198761" width="800" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                            	
                            </iframe>
							<div id="id1">
								<div class="6u 12u$(xsmall)">
								<button  class="button special fit "  onclick="AJAX_BOOM()">Check Availability</button>
								</div>
							</div>
                        </section>

                </div>
            </section>
			<script>
				function AJAX_BOOM(){
					<?php
						$_SESSION['id'] = 9;

					?>
					var xhr = new	XMLHttpRequest();
					xhr.open("GET","http://localhost:80/new/php/parking.php",true);
					xhr.send();
					xhr.onload = function(){
						if(xhr.status === 200){
							document.getElementById("id1").innerHTML = this.responseText;
						}
					}
				}
			</script>

    </body>
</html>