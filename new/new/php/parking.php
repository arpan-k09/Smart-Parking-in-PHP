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

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    echo "<br><h4><p>Total Number of Parking Slots = ".$row['total']."<br>";
    echo "Available Parking Slots = ".$row['available']."</p></h4><hr>";

    if($row['available']>0 && isset($_SESSION['user']))
    {
        echo "<div class='6u 12u$(xsmall)' style='margin-left:23.33%;margin-right:33.33%'>
        <a class='button special fit' href='http://localhost/new/book_s.php'>Book Now</a></div>";
    }
    else if(!isset($_SESSION['user']))
    {
        echo "<h4>Login is required to book slot.</h4> ";
    }
    else 
    {
        echo "<h4>Sorry, currently no Slot is available.</h4> ";
    }
    
    
} else {
    echo "0 results";
}

// function AJAX_BOOM1()
// {

//     $available = $row['available'];

//     $available = $available - 1;


//     $sql = "UPDATE parking SET available='".$available."' WHERE id='".$id."'";

//     header("Location: http://localhost/new/index.php");

// }

$conn->close();


?>

<!-- /*
var i=0;
}*/ -->