<?php

    session_start();
// session_unset();


?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Remove Vehicle</title>
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
						<h1>Remove Vehicle</h1>
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
								$n = $row['no'];
                                echo "
                                <tr>
										<td>".$row['category']."-Wheeler</td>
										<td>".$row['no']."</td><td>";
										?>
										<input type='button' value='Remove' onclick='remove(<?php $n ?>);'>
										<?php
								echo    "</td>
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
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        
                        ?>

														
						
				</div>
			</section>
	
			<script>
				function remove(n)
										{

											<?php
											echo "HIIIII";
											$sql = "DELETE from 'vehicle_info' WHERE no='$n'";
											if ($conn->query($sql) === TRUE) {
												header("Location: http://localhost/new/index.php");
										
											} else {
												echo "Error: " . $sql . "<br>" . $conn->error;
											}
											?>
										}
			</script>

	</body>
</html>

<?php
$conn->close();
?>