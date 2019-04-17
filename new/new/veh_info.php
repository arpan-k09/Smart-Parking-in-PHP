<?php

    session_start();
// session_unset();


?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Vehicle Info</title>
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
						<h1>Vehicle Info</h1>
						<hr>
						
					</header>
                    <?php

                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "project";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Check connection
                        if ($conn->connect_error) 
                        {
                            die("Connection failed: " . $conn->connect_error);
                        }

						if(isset($_SESSION['user']))
						{
							$email = $_SESSION['user'];
							$sql = "SELECT `category`, `no` FROM `vehicle_info` WHERE email='$email'";

                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) 
                        {
                            echo "<section>

							<div class='table-wrapper'>
								<table class='alt'>
									<thead>
										<tr>
											
											<th>Category</th>
											<th>Vehicle Number</th>

										</tr>
									</thead>
									<tbody>";
                            
                            while($row = $result->fetch_assoc()) 
                            {
                                echo "
                                <tr>
										<td>".$row['category']."-Wheeler</td>
										<td>".$row['no']."</td>
								</tr>
                                ";
                            }
                            echo "
                            </tbody>
									
								</table>
							</div>
                            </section>	
                            ";

                        } else {
                            echo "<h4>No Information Available.</h4>";
                        }

                        $conn->close();
                        ?>

                            <div class='12u$''>
								<ul class='actions'>
									<li><a href="add_v.php" class="button special fit">Add Vehicle</a></li>
									<li><a href="remove_veh.php" class="button special fit">Remove Vehicle</a></li>
								</ul>
							</div>
						<?php
						}
						else
						{
							echo "<h4>No Information Available.</h4>";
						}
						?>
                        

														
						
				</div>
			</section>
	


	</body>
</html>