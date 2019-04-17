<?php

    session_start();
// session_unset();


?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Login Page!</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />

		<script>

		function validateForm() 
			{
				
    			var em = document.forms["myForm1"]["username"].value;    
    			
   				var pass = document.forms["myForm1"]["pass"].value;  
    			
  				
    			   
    			if (em == "")                                   
    			{ 
        			alert("Email must be filled out"); 
        			 
        			return false; 
    			} 
   
    			else if (em.indexOf("@", 0) < 0)                 
    			{ 
        			alert("Please enter a valid e-mail address."); 
        			 
        			return false; 
    			} 
   
    			else if (em.indexOf(".", 0) < 0)                 
    			{ 
        			alert("Please enter a valid e-mail address."); 
        			
        			return false; 
    			} 
   
			     
   				

			    else if (pass == "")                        
    			{ 
        			alert("Password must be filled out");
        			return flase; 
    			} 
    			
   			}
			
       	</script>
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
					

					<!-- Form -->
						<section>
							<h3>Sign in!</h3><hr>
							<form name="myForm1" method="post" action="php/login1.php" onsubmit="return validateForm()">
								<div class="row uniform 50%">
									
									
									
									<div class="12u$">
										<input type="email" name="username" id="username" value="" placeholder="User Name" />
									</div>
									
								

									<div class="12u$">
										<input type="Password" name="pass" id="pass" value="" placeholder="Password" />
									</div>

								
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Login" class="special" /></li>
											
										</ul>
									</div>
								</div>
							</form>
							<hr>
						</section>

				</div>
			</section>

	

	</body>
</html>