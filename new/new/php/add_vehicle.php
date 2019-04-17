<?php

    session_start();

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

    $cat = $_POST['add-category'];
    $no = $_POST['no'];
    $email = $_SESSION['user'];

   
        $sql = "INSERT INTO `vehicle_info` (`email`, `category`, `no`) VALUES ('$email', '$cat', '$no')";
        
        if ($conn->query($sql) === TRUE) {
            header("Location: http://localhost/new/veh_info.php");
    
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

	

	$conn->close();
?>