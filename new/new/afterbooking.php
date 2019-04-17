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
		<script>setTimeout(function(){
			window.location.href='http://localhost/new/index.php'},2000);
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
					

					
						<section>
                            <h3>Parking</h3>
                            <hr>
                            
							<center>
							<h1>Your Parking is Confirmed</h1>
                            </center>
						</section>
						

                </div>
            </section>

    </body>
</html>





<!-- <%
                            int i = 1;
                            session.putValue("id", i);
                            int id = (int) session.getAttribute("id");

                            try {
                                Class.forName("com.mysql.jdbc.Driver");
                                // loads mysql driver

                                Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/project", "root", "");
                                out.println("successfuly connected");
                                Statement st = con.createStatement();
                                String sql = "SELECT * FROM parking WHERE id='" + id + "';";
                                ResultSet rs = st.executeQuery(sql);

                                if (rs.next()) 
								{
                                    out.println("<br><h4><p>Total Number of Parking Slots = " + rs.getInt("total") + "<br>");
                                    out.println("Available Parking Slots = " + rs.getInt("available") + "</p></h4><hr>");
                                    if ((rs.getInt("available") == 0) && (session.getAttribute("name") != null)) 
									{
                                        out.println("<div class='6u 12u$(xsmall)' style='margin-left:23.33%;margin-right:33.33%'>"
                                                + "<a class='button special fit' href='price.jsp'>Book Now</a></div>");
                                    } else if (session.getAttribute("name") == null) 
									{
                                        out.println("<h4>Login is required to book slot.</h4> ");
                                    } else 
									{
                                        out.println("<h4>Sorry, currently no Slot is available.</h4> ");
                                    }

                                }

                                con.close();
                            } catch (Exception e) {
                                e.printStackTrace();
                            }

                            //RequestDispatcher rd = request.getRequestDispatcher("home.jsp");
                        %> -->