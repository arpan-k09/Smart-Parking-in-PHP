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

$name = $_POST['username'];
$password = $_POST['pass'];

$sql = "SELECT fname FROM user WHERE email='".$name."' AND pass='".$password."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['user'] = $name;
    $_SESSION['name'] = $row['fname'];
    header("Location: http://localhost/new/index.php");
    
} else {
    header("Location: http://localhost/new/invalid_login.php");
}
$conn->close();




?>