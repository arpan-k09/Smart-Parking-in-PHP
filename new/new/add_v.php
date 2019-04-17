<?php

    session_start();
// session_unset();


?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Add Vehicle</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />

		<script>
		
		 function isValidNumber(){
		 var Number = document.forms["add"]["demo-name"].value;  
		 var cat = document.forms["add"]["category"].value;    
         var pattern = "^[A-Z]{2}([-])[0-9]{2}([-])[A-Z]{2}([-])[0-9]{4}";
		
		if(cat==0)
		{
			alert("Please select a category");
			return false;
		}
        else if (!Number.match(pattern)){
         
            alert("Number Plate Format Should Be GJ-01-XX-0000 ");
			return false;
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
							<h3>Add Vehicle</h3>
							<form name="add" method="post" action="php/add_vehicle.php" onsubmit="return isValidNumber()">
								<div class="row uniform 50%">
									<div class="12u$">
										<div class="select-wrapper">
											<select name="add-category" id="category">
												<option value="0">- Category -</option>
												<option value="2">2-Wheeler</option>
												<option value="4">4-Wheeler</option>
											</select>
										</div>
									</div>
									
									<div class="12u$">
										<input type="text" name="no" id="demo-name" value="" placeholder="Vehicle Number ex : GJ-01-XX-0000" />
									</div>

									<?php if(isset($_SESSION['user']))
									{
										echo "<div class='12u$''>
													<ul class='actions'>
														<li><input type='submit' value='ADD' class='special' /></li>
														<li><input type='reset' value='RESET' /></li>
													</ul>
												</div>";
									}
									else
									{
										echo "<h4>Please Login to add Vehicle.</h4> ";
									}
									?>
									
								</div>
							</form>
						</section>
				</div>
			</section>

		

	</body>
</html>