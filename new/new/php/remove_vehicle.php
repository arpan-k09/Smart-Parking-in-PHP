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

    echo "hii";
    $no = $_POST['no'];
    echo "$no";
    $n = 0;
	
	$sql = "DELETE from vehicle_info WHERE no='$no'";

	if ($conn->query($sql) === TRUE) {
		header("Location: http://localhost/new/veh_info.php");

	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>