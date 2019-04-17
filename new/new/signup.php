<?php

    session_start();
// session_unset();


?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>SIGN UP!</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />

		<script>

		function validateForm() 
			{
				var pa = /^\d{8}$/;

				var phoneno = /^\d{10}$/;
				var accno = /^\d{16}$/;
 				var fn = document.forms["myForm"]["fname"].value;
    			var ln = document.forms["myForm"]["lname"].value;               
    			var em = document.forms["myForm"]["email"].value;    
    			var phone = document.forms["myForm"]["mob_num"].value;  
    			var acc = document.forms["myForm"]["acc_num"].value; 
   				var pass = document.forms["myForm"]["pass"].value;  
    			var cpass = document.forms["myForm"]["con_pass"].value;  
   
  				if (fn == "") 
  				{
    				alert("First Name must be filled out");
    				return false;
  				}
			
				else if (ln == "") 
  				{
    				alert("Last Name must be filled out");
    				return false;
  				}
    			
    			   
    			else if (em == "")                                   
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
   
			     
   				else if (phone == "")                           
    			{ 
       				alert("Mobile number must be filled out"); 
       				
       				return false; 
    			}

  				else if(!(phone.match(phoneno)))
  				{
      				alert("Phone no must be a length of 10csq11");
     				return false;
  				}

  				else if (acc == "")                           
    			{ 
       				alert("Account number must be filled out"); 
       				
       				return false; 
    			}

  				else if(!(acc.match(accno)))
  				{
      				alert("Account no. must be a length of 16");
     				return false;
  				}

			    else if (pass == "")                        
    			{ 
        			alert("Password must be filled out");
        			return false; 
    			}
				else if(pass.length<8)
  				{
      				alert("Password must be a length of 8");
     				return false;
  				}
    			else if (cpass == "")                        
    			{ 
        			alert("Confirm Password must be filled out"); 
        			return false; 
    			} 
    			else if((cpass.localeCompare(pass))!=0)
  				{
      				alert("Password and Confirm Password does not match.");
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
							<h3>Registration Form</h3><hr>
							<form name="myForm" method="post" action="php/php1.php" onsubmit="return validateForm()">
								<div class="row uniform 50%">
									
									<div class="6u 12u$(xsmall)">
										<input type="text" name="fname" id="fname" value="" placeholder="First Name" />
									</div>
									
									<div class="6u 12u$(xsmall)">
										<input type="text" name="lname" id="lname" value="" placeholder="Last Name" />
									</div>
									
									<div class="12u$">
										<input type="email" name="email" id="email" value="" placeholder="Email" />
									</div>
									
									<div class="12u$">
										<input type="text" name="mob_num" id="mob_num" value="" placeholder="Mobile Number" />
									</div>

									<div class="12u$">
										<input type="text" name="acc_num" id="acc_num" value="" placeholder="Enter Account Number (Ex. 0000000000000000)" />
									</div>

									

									<div class="6u 12u$(xsmall)">
										<input type="Password" name="pass" id="pass" value="" placeholder="Password (Min 8 char.)" />
									</div>
									
									<div class="6u 12u$(xsmall)">
										<input type="Password" name="con_pass" id="con_pass" value="" placeholder="Confirm Password" />
									</div>
									
									<div class="6u$ 12u$(small)">
										<input type="checkbox" id="human" name="human">
										<label for="human">I am not a robot</label>
									</div>

									
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Sign Up" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
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