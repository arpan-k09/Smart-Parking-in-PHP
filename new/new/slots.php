<?php

    session_start();
// session_unset();


?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Slots</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <script>
        
    </script>
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
                            <h3>Parking Spaces</h3>
                            <h4>List of Parking Spaces Areawise : </h4>
							
							<div class="table-wrapper">
								<table>
									<thead>
										<tr>
                                            <th></th>
											<th>Name</th>
											<th></th>
											
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1.</td>
											<td>Chauta Bazzar</td>
                                            <td style="padding-top:1.5em"><a href="chautta.php" class="6u$ 12u$(xsmall) button special ">See Spaces</a></td>
											
										</tr>
										<tr>
											<td>2.</td>
											<td>Athwalines</td>
                                            <td style="padding-top:1.5em"><a href="athwalines.php" class="6u$ 12u$(xsmall) button special ">See Spaces</a></td>
											
										</tr>
										<tr>
											<td>3.</td>
											<td>Ringroad</td>
                                            <td style="padding-top:1.5em"><a href="ringroad.php" class="6u$ 12u$(xsmall) button special ">See Spaces</a></td>
											
										</tr>
										<tr>
											<td>4.</td>
											<td>Varachha Road</td>
                                            <td style="padding-top:1.5em"><a href="varachha.php" class="6u$ 12u$(xsmall) button special ">See Spaces</a></td>
											
										</tr>
										<tr>
											<td>5.</td>
											<td>Nanpura</td>
                                            <td style="padding-top:1.5em"><a href="nanpura.php" class="6u$ 12u$(xsmall) button special ">See Spaces</a></td>
											
										</tr>
										
									</tbody>
									
								</table>
							</div>
							
				</div>
			</section>

	

	</body>
</html>