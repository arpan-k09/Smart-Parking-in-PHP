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

	$fname = $_POST['fname'];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$mobnum = $_POST["mob_num"];
	$pass = $_POST["pass"];


	$sql = "INSERT INTO `user` (`fname`, `lname`, `email`, `monum`, `pass`) 
	VALUES ('$fname', '$lname', '$email', '$mobnum', '$pass')";

	if ($conn->query($sql) === TRUE) {
		header("Location: http://localhost/new/login.php");

	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>