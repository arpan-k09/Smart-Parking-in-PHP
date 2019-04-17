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

$id = $_SESSION['id'];

$sql = "SELECT * FROM parking WHERE id='$id';";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

$available = $row['available'] - 1;


$sql = "UPDATE parking SET available='".$available."' WHERE id='".$id."'";

$result = $conn->query($sql);



$conn->close();
header("Location: http://localhost/new/afterbooking.php");

?>