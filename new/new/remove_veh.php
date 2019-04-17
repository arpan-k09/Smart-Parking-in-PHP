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

        <script>
		
		 function isValidNumber(){
		 var Number = document.forms["add"]["demo-name"].value;  
		   
         var pattern = "^[A-Z]{2}([-])[0-9]{2}([-])[A-Z]{2}([-])[0-9]{4}";
		
        if (!Number.match(pattern)){
         
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
							?>
							<form name="add" method="post" action="php/remove_vehicle.php" onsubmit="return isValidNumber()">
                        
                        <h4>Enter the number of the vehicle which you want to delete.</h4>
                        <div class="12u$">
							<input type="text" name="no" id="demo-name" value="" placeholder="Vehicle Number ex : GJ-01-XX-0000" />
						</div>
                        <br>

                        <div class='12u$''>
							<ul class='actions'>
								<li><input type='submit' value='Remove' class='special' /></li>
								<li><input type='reset' value='RESET' /></li>
							</ul>
						</div>

                        </form>

						<?php

                        } else {
                            echo "<h4>No Information Available</h4>";
                        }

                        $conn->close();
                        
						}
						else
						{
							echo "<h4>Please Login to Remove Vehicle</h4>";
						}
						?>
														
						
				</div>
			</section>
	


	</body>
</html>